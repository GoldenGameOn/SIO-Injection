<!-- English Part -->

<!-- Step 1: Prepared Statements 
It depends on languages, but the global one is 1=1, which will always be true-->
<?php
username = john or 1=1
?>

<!-- Step 2: Stored Procedures
We need to build SQL statements with parameters which are automatically parameterized
In VB.Net, we use a SqlCommand.-->

<?php
 Try
   Dim command As SqlCommand = new SqlCommand("sp_getAccountBalance", connection)
   command.CommandType = CommandType.StoredProcedure
   command.Parameters.Add(new SqlParameter("@CustomerName", CustomerName.Text))
   Dim reader As SqlDataReader = command.ExecuteReader()
   '...
 Catch se As SqlException
   'error handling
 End Try
?>

<!-- Step 3: Escaping SQLi in PHP
With prepared statements and parameterized queries, it is impossible for an attacker to inject malicious SQL
Example with SQLi-->

<?php
$stmt = $dbConnection->prepare('SELECT * FROM employees WHERE name = ?');
$stmt->bind_param('s', $name);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    // do something with $row
}
?>

<!-- Partie en français -->

<!-- Etape 1 : Phrases préparées
Ca dépend des langages, mais la phrase globale pour être sûr de ne pas être hacké est "1=1", ce qui sera toujours vrai-->
<?php
username = john or 1=1
?>

<!-- Etape 2 : Procédures stockées
On doit faire des phrases SQL avec des paramètres qui seront automatiquement paramétrés
En VB.Net, on utilise un SqlCommand.-->

<?php
 Try
   Dim command As SqlCommand = new SqlCommand("sp_getAccountBalance", connection)
   command.CommandType = CommandType.StoredProcedure
   command.Parameters.Add(new SqlParameter("@CustomerName", CustomerName.Text))
   Dim reader As SqlDataReader = command.ExecuteReader()
   '...
 Catch se As SqlException
   'error handling
 End Try
?>

<!-- Etape 3 : Eviter le SQL Injection en PHP
Avec des phrases préparées et des requêtes paramétrées, il est impossible pour un hacker d'injecter du SQL malveillant
Un exemple avec SQLi-->

<?php
$stmt = $dbConnection->prepare('SELECT * FROM employees WHERE name = ?');
$stmt->bind_param('s', $name);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    // do something with $row
}
?>
 
 