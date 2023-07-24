<?php
    include_once("templates/header.php");
?>

<section class="px-4">
    <?php if(isset($printMessage) && $printMessage !== ''): ?>
    <p class="block py-4 w-full bg-green-500 font-bold rounded-md text-center text-white mb-6">
        <?php echo $printMessage ?>
    </p>
    <?php endif ?>

    <h2 class="text-2xl font-semibold">Seus contatos</h2>

    <?php if (count($contacts)  > 0): ?>
    <div class="mt-5 w-full">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-6">Fornecedor</th>
                        <th scope="col" class="px-6 py-6">Numero</th>
                        <th scope="col" class="px-6 py-6">Obs</th>
                        <th scope="col" class="px-6 py-6">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact) : ?>
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <?php echo $contact['name'] ?></td>
                        <td class="px-6 py-4"><?php echo $contact['phone'] ?></td>
                        <td class="px-6 py-4"><?php echo $contact['observation'] ?></td>
                        <td class="px-6 py-4 flex items-center gap-3">
                            <a href="<?php echo $BASE_URL?>show.php?id=<?php echo $contact['id'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-green-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>

                            <a href="<?php echo $BASE_URL?>edit.php?id=<?php echo $contact['id'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                            <form action="<?php echo $BASE_URL?>config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?php echo $contact['id'] ?>">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-red-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

    </div>
    <?php else: ?>
    <div class="flex flex-col gap-4 mt-5">
        <p class="text-lg">Ainda não há contatos.</p>
        <a href="<?php echo $BASE_URL ?>create.php" class="flex items-center gap-2 text-blue-600">Cadastrar
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
        </a>
    </div>
    <?php endif ?>
</section>


<?php 
    include_once("templates/footer.php");
?>