# php-forms

2 demos van een formulier zonder `action`, zodat het zichzelf refresht.

Maak zelf `00-get-action.php` met in het formulier:

- `action=printstuff.php` en `method=get`
- `action=printstuff.php` en `method=post`

`printstuff.php`:

```Php
echo "<li>" . $_GET['vorm'] . "</li>";
echo "<li>" . $_GET['kleur'] . "</li>";
echo "<li>" . $_POST['vorm'] . "</li>";
echo "<li>" . $_POST['kleur'] . "</li>";

```
