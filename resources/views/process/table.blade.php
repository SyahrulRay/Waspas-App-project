<x-app-layout>

    <div class="container mx-auto px-8 items-center justify-center mt-14">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-200 mb-8 text-center">Please Input Data</h2>
        <div class="flex flex-col text-gray-200 justify-center items-center gap-4">
            <label class="text-gray-200" for="">Number of Rows </label><input class="rounded-md text-gray-800" type="text" name="" id="rows">
            <label for="">Number of Columns</label><input class="rounded-md text-gray-800" type="text" name="" id="cols">
            <Button class="bg-blue-500 hover:bg-blue-700 w-20 h-8 rounded-lg" onclick="CreateTable()">Create</Button>
        </div>
        <div id="tablearea" class="justify-center mt-8">

        </div>
        <Button class="bg-blue-500 hover:bg-blue-700 w-full h-10 rounded-lg mt-4" onclick="CreateTable()">Add Problem</Button>
    </div>



</x-app-layout>
<script>
    function CreateTable() {
        let rows = document.getElementById("rows").value;
        let cols = document.getElementById("cols").value;
        rows = parseInt(rows) + 1
        cols = parseInt(cols) + 1

        var table = "<table border='1' class=\"table-fix w-full\" >";

        for (let r = 0; r < rows; r++) {

            table += "<tr>";

            for (let c = 0; c < cols; c++) {
                table += "<td><input class=\"rounded-md w-full\" type=\"text\"></td>";
            }

            table += "</tr>";
        }
        table += "</table>";

        document.getElementById("tablearea").innerHTML = table;
    }
</script>