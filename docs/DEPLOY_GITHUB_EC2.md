# Deploy: GitHub -> EC2 (mesma instancia)

Este guia descreve o fluxo oficial para:

1. subir alteracoes para o GitHub;
2. fazer deploy na EC2;
3. manter este projeto convivendo com outros projetos na mesma instancia sem impacto.

---

## 1) Publicar alteracoes no GitHub (local)

No seu computador, dentro do projeto:

```bash
cd /Users/pedrocavendish/Desktop/The_Way_LP
git status
```

Adicione apenas os arquivos do projeto (nunca chaves `.pem`):

```bash
git add .
git restore --staged LP_AV.pem 2>/dev/null || true
```

Commit e push:

```bash
git commit -m "describe your change"
git push origin main
```

---

## 2) Fazer deploy na EC2

Conecte na instancia:

```bash
cd /Users/pedrocavendish/Desktop/The_Way_LP
chmod 400 "LP_AV.pem"
ssh -i "LP_AV.pem" ec2-user@ec2-3-87-71-227.compute-1.amazonaws.com
```

Entre no projeto e atualize codigo:

```bash
cd ~/apps/the-way-lp
git pull origin main
```

Instale/atualize dependencias e gere assets:

```bash
composer install --no-interaction --prefer-dist --optimize-autoloader
npm install
npm run build
```

Atualize cache do Laravel:

```bash
php artisan optimize:clear
php artisan config:cache
```

Reinicie o processo da app (PM2):

```bash
pm2 restart the-way-lp
pm2 save
```

Teste:

```bash
curl -I https://lp.altavistainvest.com.br/the-way/
```

---

## 3) Configuracao usada neste projeto em producao

### 3.1 .env (EC2)

Garantir estes valores:

```env
APP_ENV=production
APP_URL=https://lp.altavistainvest.com.br/the-way
ASSET_URL=https://lp.altavistainvest.com.br/the-way
```

### 3.2 Vite base path

No arquivo `vite.config.js`:

```js
base: '/the-way/',
```

### 3.3 URL forcada em producao

No `AppServiceProvider`:

```php
URL::forceRootUrl(config('app.url'));
URL::forceScheme('https');
```

---

## 4) Cuidados por usar a mesma instancia

- Nao alterar `server_name`, `root` ou `location /` do projeto principal sem necessidade.
- Manter este projeto apenas na rota `/the-way/` dentro do Nginx.
- Sempre validar Nginx antes de recarregar:

```bash
sudo nginx -t
sudo systemctl reload nginx
```

- Nunca expor segredo/chave no repositorio (`.env`, `.pem`, credenciais).

---

## 5) Checklist rapido de deploy

1. `git push` local concluido.
2. `git pull` na EC2 concluido.
3. `composer install` + `npm run build`.
4. `php artisan optimize:clear` + `config:cache`.
5. `pm2 restart the-way-lp`.
6. `curl -I https://lp.altavistainvest.com.br/the-way/` retornando `200` ou `302`.

---

## 6) Rollback rapido

Se algo quebrar apos deploy:

```bash
cd ~/apps/the-way-lp
git log --oneline -n 5
git checkout <commit-anterior>
composer install --no-interaction --prefer-dist --optimize-autoloader
npm run build
php artisan optimize:clear
php artisan config:cache
pm2 restart the-way-lp
```

Depois, corrigir no codigo e publicar novo commit.
