<form action="" method="post" enctype="">
    <div class="modal fade text-left" id="addAlternatif" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add Kriteria</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label for="criteria" class="block text-gray-700 font-bold mb-2">Alternatif:</label>
                        <input type="text" id="criteria" name="criteria" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-400">
                        @error('namealternatif') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-400">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>