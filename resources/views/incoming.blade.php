<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        h2 {
            font-size: 15px;
            font-style: normal;
            margin-left: 7%;
            color: black;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }

        h1 {
            margin-left: 2%;
            color: royalblue;
            font-family: oblique;
            font-size: 40px;
            text-transform: uppercase;
            text-shadow: 10px 5px 2px rgba(0, 0, 0, 0.1);
            -webkit-text-stroke: 2px royalblue;
            text-stroke: 2px royalblue;
        }


        h3 {
            text-align: center;
            padding: 2px;
            font-size: 20px;
            border: 2px black;
            align-items: center;
            justify-content: center;
        }

        th {
            font-size: medium;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        header {
            width: 100%;
            padding: 0;
            margin: 0;
            height: 80px;
            background-color: #e9ecef;
            position: relative;
            z-index: 2;
        }

        body {
            background: url("{{asset('assets/rr.png')}}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }


        label {
            margin-left: 15%;
        }

        .box-label {
            border: 2px solid black;
            padding: 2px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #D3D3D3;
        }

        .box-label h3 {
            margin: 2;
        }

        .sidebar {
            width: 100px;
            height: 100;
            background-color: #e9ecef;
            padding: 20px;
            font-size: 12px;
            position: fixed;
            top: 0;
            left: 0;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            padding: 5%;
        }

        .sidebar li {
            margin-bottom: 10px;
            padding: 5%;
        }

        .sidebar a {
            text-decoration: none;
            color: whitesmoke;
            display: block;
        }


        .sidebar a:hover {
            background-color: #ccc;
            border-radius: 20px;

        }

        .hoverable {
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 220px;
            /* Adjust the margin value to create space for the sidebar */
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: center;
            padding: 10px;
        }

        p {
            color: black;
            font-weight: bold;
        }


        .rounded-image {
            width: 120px;
            border-radius: 50px;
            position: fixed;
            top: 87%;
            left: 94%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        .image-container:hover .rounded-image {
            transform: translate(-60%, -60%) scale(1.3);
            animation: grow 1.5s linear forwards;
        }


        .text-overlay {
            display: none;
            position: fixed;
            top: 83%;
            left: 79%;
            transform: translate(-40%, -40%) scale(0.3);
            font-size: 45px;
            background-color: none;
            color: black;
            -webkit-text-stroke: 2px #3498db;
            -webkit-text-fill-color: #555;
            font-weight: bolder;
            width: 20%;
            padding: 10px;
            z-index: 9999;
            animation: slideInRight 1.5s forwards;
        }

        @keyframes slideInRight {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 2;
            }
        }

        .image-container:hover .text-overlay {
            display: block;
        }

        @keyframes grow {
            0% {
                transform: translate(-50%, -50%) scale(1);
            }

            100% {
                transform: translate(-50%, -50%) scale(1.2);
            }
        }

        .floating-button {
            position: fixed;
            bottom: 89%;
            /* Adjust the distance from the bottom as needed */
            right: 20px;
            /* Adjust the distance from the right as needed */
            z-index: 9999;
            /* Ensure it's on top of other elements */
        }
    </style>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');

            sidebar.addEventListener('click', () => {
                sidebar.style.left = '-15px';
            });

            content.addEventListener('click', () => {
                if (sidebar.style.left === '-15px') {
                    sidebar.style.left = '0';
                }
            });
        });
    </script>
</head>

<body>
    <div class="sidebar" style="position: fixed; top:145; left: 0; width: 12%; height: 100vh; background-color:#343a40; padding: 10px; font-size: 10px; z-index: 1;  border-right: 2px solid #343a40; /* Set the right border */
  border-radius: 0 50px 0 0;">
        <ul><br><br>
            <li><a href="{{url('deploy')}}"><i class="fas fa-cogs fa-3x"></i>
                    <p style="color:aliceblue;font-size:12px; ">Deploy Inventory</p>
                </a></li>
            <li><a href="{{url('return')}}"><i class="fas fa-undo fa-3x "></i>
                    <p style="color:aliceblue; font-size:12px; ">Return Inventory</p>
                </a></li>
            <li><a href="{{url('dispose')}}"><i class="fas fa-trash-alt fa-3x"></i>
                    <p style="color:aliceblue; font-size:12px; "> Dispose Inventory</p>
                </a></li>
            <li><a href="{{url('reserve')}}"><i class="fas fa-exchange-alt fa-3x"></i>
                    <p style="color:aliceblue; font-size:12px; ">Reserve Inventory</p>
                </a></li>
            <h3 style=" color: #ffffff;
  filter: brightness(0.5);font-size: 25px; margin-left:-15;font-weight:bold;">Maintainance</h3>
            <li><a href="{{url('category')}}"><i class=></i>
                    <h3 style="color:white; font-size:10px; margin-left:-90;">*CATEGORY</h3>
                </a></li>
            <li><a href="{{url('incoming')}}"><i class=""></i>
                    <h3 style="color:white; font-size:10px;margin-left:-90;">*DEVICE</h3>
                </a></li>
            <li><a href="{{url('personnel')}}"><i class=""></i>
                    <h3 style="color:white; font-size:10px;margin-left:-90;">*PERSONNEL</h3>
                </a></li>
            <li>
                <button class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Log Out') }}
                </button>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div><br><br>
    <header style="position: fixed; top: 0; left: 0; width: 100%; height:13%;  background:#343a40; z-index: 2;">
        <nav>
            <h1 style="display: flex; align-items: center;">
                <img src="{{asset('assets/it.png')}}" class="rounded float-left" alt="Responsive image" style=" margin-left: -2%; width: 15%; border-radius: 50px;">
                <!-- Button trigger modal -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            </h1>
        </nav>
    </header>
    <br><br>
    <!-- Modal --> <br>
    <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-radius: 5px; ">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Category Item description</h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('incoming')}}" method="POST">
                        @csrf
                        <div class="btn-group">
                            <div class="dropdown-select">
                                <select name="category_id">
                                    <option value="" disabled>Select a category</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}">{{$item->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br><br>
                        <p>Enter Description</p>
                        <input type="text" name="description" style="padding: 8px; box-sizing: border-box;">
                        <p>Enter Serial No.</p>
                        <input type="text" name="serial_no" style="padding: 8px; box-sizing: border-box;">
                        <p></p>
                        <div class="form-check">
                            <input class="form-check-input" name="check" type="checkbox" value="1" id="flexCheckChecked" style="vertical-align: top;">
                            Has Sub-category
                            <label class="form-check-label" for="flexCheckChecked"></label>
                            <div class="form-group" id="subcategoryForm" style="display: none;">
                                <p></p>
                                <input type="text" name="processor" style="padding: 8px; box-sizing: border-box;">
                                <p>Enter Processor</p>
                                <input type="text" name="memory" style="padding: 8px; box-sizing: border-box;">
                                <p>Enter Memory</p>
                                <input type="text" name="storage drive" style="padding: 8px; box-sizing: border-box;">
                                <p>Enter Storage Drive</p>
                                <input type="text" name="motherboard" style="padding: 8px; box-sizing: border-box;">
                                <p>Enter Motherboard</p>
                            </div>
                        </div>

                        <script>
                            const checkbox = document.getElementById('flexCheckChecked');
                            const subcategoryForm = document.getElementById('subcategoryForm');

                            checkbox.addEventListener('change', function() {
                                if (this.checked) {
                                    subcategoryForm.style.display = 'block';
                                } else {
                                    subcategoryForm.style.display = 'none';
                                }
                            });
                        </script>
                </div>
                <div class="modal-footer">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
                    <button type="button" class="btn btn-Danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-Success">
                        <i class="fas fa-paper-plane"></i> Submit
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div style="display: flex; justify-content: flex-end; margin-right: 4%;">
        <button type="button" class="floating-button" style="padding: 5px; width: 8%; border-color:white; background-color: #205D7A;
   color:white; border-radius:10px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="fas fa-plus"></i> Add New
        </button>
    </div>


    <table class="table table-borderless" style="justify-content: center; height: 10%;  width: 79%; margin-left:18%; background-color: white; color: black; font-size:13px;">
        <thead class="thead-light">
            <tr>
                <th scope="col" style="text-align: center;">CATEGORY</th>
                <th scope="col" style="text-align: center;">DESCRIPTION</th>
                <th scope="col" style="text-align: center;">SERIAL NO.</th>
                <th scope="col" style="text-align: center;">SUBCATEGORY</th>
                <th scope="col" style="text-align: center;">VIEW SUBCATEGORY</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($incoming as $incoming_item)
            <tr class="table-light">
                <td scope="row" style="text-align: center;">{{$incoming_item->category->category}}</td>
                <td scope="row" style="text-align: center;">{{$incoming_item->description}}</td>
                <td scope="row" style="text-align: center;">{{$incoming_item->serial_no }}</td>
                <td scope="row" style="text-align: center;">
                    @if ($incoming_item->item_sub_category === 0)
                    <p style="font-size:9.5px; margin-left: 25%; background-color: #DC143C; padding: 9px; width: 40%; border-radius: 10px; color: whitesmoke; ">No Subcategory</p>
                    @elseif ($incoming_item->item_sub_category === 1)
                    <p style="font-size:9px; margin-left: 25%; background-color: #008000; padding: 9px; width: 40%; border-radius: 10px; color: white;">With Subcategory</p>
                    @endif
                </td>
                <td scope="row">
                    <button type="button" class="btn btn-warnings" data-toggle="modal" data-target="#subCategory{{$incoming_item->id}}">
                        <i class="fa-solid fa-eye fa-1x"></i>
                    </button>
                    <div class="modal fade" id="subCategory{{$incoming_item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="border-radius:20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-radius: 5px; background-color: rgba(220, 230, 4s55, 0.8);">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="subCategoryLabel">Item Subcategory</h5>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered" style="justify-content: center; background-color: whitesmoke; color: black; font-size:10px;">
                                        <thead class="thead-dark">
                                            <th>Processor</th>
                                            <th>Memory</th>
                                            <th>Storage Drive</th>
                                            <th>Motherboard</th>
                                        </thead>
                                        <tbody>
                                            @forelse ($incoming_item->subcategories as $item)
                                            <tr>
                                                <td scope="row" style="text-align: center;">{{$item->processor}} </td>
                                                <td scope="row" style="text-align: center;">{{$item->memory}} </td>
                                                <td scope="row" style="text-align: center;">{{$item->storage_drive}} </td>
                                                <td scope="row" style="text-align: center;">{{$item->motherboard}} </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td scope="row" style="text-align: center;" colspan="4">
                                                    <p>No Sub Category</p>
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <div class="modal-content" style="align-items:flex-end;">
                                        <button type="button" class="btn btn-Danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="image-container">
        <img src="{{asset('assets/pol.png')}}" class="rounded-image" alt="Responsive image">
        <div class="text-overlay">#SubokNA</div>
    </div>
    <script src="https://kit.fontawesome.com/a9c2596192.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a9c2596192.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>