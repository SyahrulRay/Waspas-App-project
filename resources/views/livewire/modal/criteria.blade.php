<form action="" method="" enctype="">
    <div class="modal fade text-left" id="addKriteria" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add Kriteria</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label for="criteria" class="block text-gray-700 font-bold mb-2">Criteria:</label>
                        <input type="text" id="criteria" name="criteria" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-400">
                        @error('namecriteria') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="weight" class="block text-gray-700 font-bold mb-2">Weight:</label>
                        <input type="number" step="0.01" id="weight" name="weight" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-400">
                        @error('weight') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 font-bold mb-2">Category:</label>
                        <select id="category" name="category" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-400">
                            <option value="" disabled selected>Select category</option>
                            <option value="benefit">Benefit</option>
                            <option value="cost">Cost</option>
                        </select>
                        @error('status') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-400">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>