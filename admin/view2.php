<?php
include_once('../config/connection.php');
include('session.php');

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,description FROM posts WHERE id = :id');
    
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


?>
<?include("header.php");?>

?>
<main class="col-md-9 col-lg-10">
	<div class="container">

		<h1 id="main-title">Meus Posts</h1>

				<table class="table" id="contacts-table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Título</th>
							<th scope="col">Descrição</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
	<tbody>
					<?php foreach($results as $post): ?>

						<tr>
							<td scope="row">id</td>
							<td scope="row">Título</td>
							<td scope="row">Descrição</td>
							<td class="actions">
								<a href="viewBlog.php?id=<?= $post["id"] ?>">
									<i class="fas fa-eye check-icon">Ver</i>
								</a>
								<a href="editar.php?id=<?= $post["id"] ?>">
									<i class="fas fa-eye check-icon">Editar</i>
								</a>
								<a href="delete.php?id=<?= $post["id"] ?>">X</a>

							</td>
						</tr>
					<?php endforeach; ?>
	</tbody>
				</table>
	</div>
	</main>
	<form action="editar-fim.php" method="post" enctype="multipart/form-data">
<?php foreach($results as $post): ?>
	<p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
	<p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
	<p><input type="text" value="<?= $post["description"] ?>" name="description"></p>
<?php endforeach; ?>
	<input type="submit" value="EDITAR">
</form>


</body>
</html>