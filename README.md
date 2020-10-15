Xserver利用の流れ

契約
＝＞ブラウザの管理画面から鍵の生成
＝＞SSHで接続
=>git configでconfigを作る
=>ssh-keygen でかぎの作成
=>自分のGithubアカウントに紐付ける
=>cloneする
=>artisan serveできない
=>phpのバージョンをシンボリックリンクを貼って変更
=>php artisan serveできない
=>composer installする
=>arrisan serveできる(.env作ったりartisan:keygenしたりする)
=>https://qiita.com/n_oshiumi/items/2a1cc7d147ee1eff3e23 を参考にLaravelプロジェクトのpublicにシンボリックリンクを貼る
$ cd ~/ドメイン名/public_html
$ ln -s ~/production/プロジェクト名/public ./public
.htaccessに以下を追加する
RewriteEngine On
RewriteRule ^(.*)$ public/$1 [QSA,L]

ドメインにアクセスしたら見れた!!