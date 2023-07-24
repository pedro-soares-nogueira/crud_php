<?php
    include_once("templates/header.php");
?>

<section class="px-4 space-y-4">
    <?php include_once("templates/button-icon.php"); ?>

    <h2 class="text-4xl font-bold">Create</h2>

    <div class="w-full max-w-md">
        <form action="<?php echo $BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="mb-4">
                <label class="block text-gray-700 text-md mb-2">
                    Nome
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Nome" id="name" name="name">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-md mb-2">
                    Telefone
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Telefone" id="phone" name="phone">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-md mb-2">
                    Observações
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" rows="5" placeholder="Endereço" id="observation" name="observation"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Salvar
                </button>
            </div>
        </form>
    </div>

</section>


<?php 
    include_once("templates/footer.php");
?>