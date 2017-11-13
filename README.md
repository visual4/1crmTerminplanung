# 1crmTerminplanung
Einfache 1CRM Erweiterung zur Terminabstimmung um z.B. den besten Tag+Tageszeit für einen wiederkehrenden Kurs zu finden

## UserStory:
Ich als 1CRM Benutzer möchte herausfinden, an welchem Tag, zu welcher Urzeit ich meinen wöchentlichen Kurs am besten stattfinden lasse. Meine Kunden sagen mir z.B.: "Ich habe Dienstag Nachmittag Zeit" oder "Freitag abends kann ich meistens". Diese Informationen möchte ich speichern und auswerten.

## Die 1CRM Erweiterung
die Erweiterung für 1CRM beinhaltet ein neues Modul, mit dem bei jedem Kontakt mehrere Termin-Slots jeweils mit Status und Bemerkung hinterlegt werden können. Die Slots bestehen im Standard aus einem Dropdown für den Wochentag und einem Dropdown für die Zeit (Vormittag, Nachmittag, Abend). Die Werte können natürlich über den 1CRM Auswahllisten-Editor beliebig angepasst werden.
Über das Reporting von 1CRM lassen sich flexible Berichte erstellen, um herauszufinden, wann der beste Zeitpunkt ist.

## Ideen für zukünftige Verbesserungen
- Möglichkeit, um Interessen des Kontaktes zu hinterlegen
- Web-App erstellen, die es ermöglicht, dass Kunden die Informationen selbst pflegen

## Installation
die manifest-Datei und das root-Verzeichnis müssen auf oberster Ebene in eine ZIP-Datei gepackt werden, dann lässt sich die Erweiterung einfach über den Upgrade-Wizard von 1CRM 7.8.* und 8.0.* installieren

## 1CRM
1CRM ist ein CRM-System das ausser den klassischen CRM-Funktionen aus Vertrieb und Marketing viele Module für Faktura, Support, Projektmanagement, HR etc. mitbringt. Die kostenlose Startup Edition kann unter [http://1crm-system.de] heruntergeladen werden.