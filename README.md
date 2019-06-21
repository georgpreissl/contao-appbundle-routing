# Contao-Routing Demo-AppBundle

Ein Demo-AppBundle das zeigt wie einfaches Routing unter Contao 4.4 funktioniert.

So wird es installiert:

1) Den Folder "src" in das Contao-Root-Verzeichnis packen.

2) Die Datei "ContaoManagerPlugin.php" in das Verzeichnis "app" geben.
(Das Verzeichnis "app" befindet sich im Contao-Root.)

3) Die composer.json im Contao-Root-Verzeichnis mit folgenden Zeilen ergänzen:
```
    "autoload": {
        "psr-4": { "AppBundle\\": "src/AppBundle/" },
        "classmap": ["app/ContaoManagerPlugin.php"]
    }
```

4) Danach mit folgendem Befehl auf der Kommandozeile die Autoload Konfiguration aktualisieren:
```
composer install --optimize-autoloader
```

War die Installation erfolgreich, kann man nun mit der URL-Ergänzung "test" der gelegten Route folgen :)
Also zb. mit: "http://mycontaoinstallation/test"

Optional können mit der URL zwei Parameter mitgegeben werden.
Zb.: "http://mycontaoinstallation/test/10/20"

Funktioniert die Route, erscheint eine Frontendausgabe mit dem Titel "Frontend Route".
Gesteuert wird diese Ausgabe in diesem Demo-Bundle über die Controller-Klasse unter "src/AppBundle/Controller/TestController.php". Dort werden auch die beiden Parameter verarbeitet.

