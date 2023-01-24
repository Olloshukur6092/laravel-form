<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery.3.6.3.min.js') }}"></script>
</head>

<body>

    <div class="container my-3">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card shadow border-0">
                    <div class="card-header text-center border-0">
                        <h3>User Data Upload</h3>

                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="fname">Firstname</label>
                                <input type="text" id="fname" class="form-control"
                                    placeholder="Enter firstname...">
                            </div>
                            <div class="mb-3">
                                <label for="lname">Lastname</label>
                                <input type="text" id="lname" class="form-control"
                                    placeholder="Enter lastname...">
                            </div>
                            <div class="mb-3">
                                <label for="desc">Description</label>
                                <textarea id="desc" cols="30" rows="3" class="form-control" placeholder="Enter description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="document">Select document type</label>
                                <select id="document" class="form-select">
                                    <option value="0" selected disabled>Select document type</option>
                                    <option value="1">Doc 1</option>
                                    <option value="2">Doc 2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date">Date</label>
                                <input type="date" id="date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="fileExel">Enter file (exel file)</label>
                                <input type="file" id="fileExel" class="form-control">
                                <small id="errorExel" class="text-danger"></small>
                            </div>
                            <div class="mb-3">
                                <label for="filePdf">Enter file (pdf file)</label>
                                <input type="file" id="filePdf" class="form-control">
                                <small id="errorPdf" class="text-danger"></small>
                            </div>
                            <div class="mb-3">
                                <label for="fileImage">Enter image (.jpg, .png or .PNG, .JPG)</label>
                                <input type="file" id="fileImage" class="form-control">
                                <small id="errorImage" class="text-danger"></small>
                            </div>
                            <div class="mb-3">
                                <label for="range" class="form-label">Summa Kredit</label>
                                <input type="range" class="form-range" id="range" min="1" max="300">
                                <span id="rangeHis"></span>
                            </div>
                            <div class="mb-3">
                                <input type="button" class="btn btn-success w-100" value="Send Data">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#range").change(function() {
                let sum = parseInt(this.value) * 100000;
                $("#rangeHis").html(sum + " so'm")
            })
            $("#getData").click(function() {
                $.ajax({
                    type: "GET",
                    url: "uploads",
                    success: function(data) {
                        console.log(data)
                    }
                })
            })

            // check file image
            $("#fileImage").change(function() {
                let file = this.value.split('.')
                let arrayExtensions = ['jpg', 'png', 'jpeg'];
                let ext = file[file.length - 1].toLowerCase();
                let error = "";
                if (arrayExtensions.lastIndexOf(ext) === -1) {
                    error = "Fayl xato tanlandi (png, jpg yoki jpeg)";
                } else {
                    error = "";

                }

                $("#errorImage").html(error)
            })

            // check file exel
            $("#fileExel").change(function() {
                let file = this.value.split('.')
                let arrayExtensions = ['xlsx', 'xls', 'xlx'];
                let ext = file[file.length - 1].toLowerCase();
                let error = "";

                if (arrayExtensions.lastIndexOf(ext) === -1) {
                    console.log("Xato exel emas")
                    error = "Fayl xato tanlandi. (xlsx yoki xls)"
                } else {
                    console.log("ishladi exel ekan")
                    error = "";
                }

                $("#errorExel").html(error)
            })

            // check file pdf
            $("#filePdf").change(function() {
                let file = this.value.split('.')
                let arrayExtensions = ['pdf', 'docx', 'doc'];
                let ext = file[file.length - 1].toLowerCase();
                let error = "";

                if (arrayExtensions.lastIndexOf(ext) === -1) {
                    console.log("Xato word emas")
                    error = "Fayl xato tanlandi. (pdf, docx yoki doc)"
                } else {
                    console.log("ishladi pdf ekan")
                    error = "";
                }

                $("#errorPdf").html(error)
            })
        })
    </script>
</body>

</html>
