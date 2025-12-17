<p>PDO::ERRMODE_EXCEPTION]</p>
<p>    );</p>
<p>} catch (PDOException $e) {</p>
<p>    die("Database connection failed.");</p>
<p>}</p>
<p>// ===== FETCH ACTIVE BANS =====</p>
<p>$sql = "</p>
<p>SELECT name, reason, banned_by_name, time, until</p>
<p>FROM {$db_prefix}bans</p>
<p>WHERE active = 1</p>
<p>ORDER BY time DESC</p>
<p>LIMIT 100</p>
<p>";</p>
<p>$bans = $pdo-&gt;query($sql)-&gt;fetchAll(PDO::FETCH_ASSOC);</p>
<p>?&gt;</p>
<p>Server Bans</p>
<style>
body {
    font-family: Arial, sans-serif;
    background: #0f0f0f;
    color: #eee;
    margin: 0;
    padding: 20px;
}
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
    border-bottom: 1px solid #333;
}
th {
    background: #1c1c1c;
}
</style>
<h1>Actieve Server Bans</h1>
<table>
<tbody><tr>
    <th>Speler</th>
    <th>Reden</th>
    <th>Staff</th>
    <th>Duur</th>
</tr>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>

</tbody></table>