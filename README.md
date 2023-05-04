# picard test app

## install

```bash
composer install 

cd openapi && npm install
```

## generate

In openapi/ gibt es das generate.sh script, das generiert aus dem file openapi.json im selben file die lib nach lib/.

Dann kann man sich mit ```symfony console test``` die Test-Befehle anzeigen lassen und mit z.b ```symfony console test:get-categories``` den Output anschauen.
