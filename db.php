name: Deploy to Alwaysdata

on:
  push:
    branches:
      - main

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout code
        uses: actions/checkout@v4

      - name: Deploy via FTP
        uses: SamKirkland/FTP-Deploy-Action@v4.3.5
        with:
          server: ftp.alwaysdata.com
          username: TU_USUARIO
          password: TU_PASSWORD
          server-dir: www/cliente1/