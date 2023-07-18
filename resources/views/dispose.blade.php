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
        function toggleFormGroups() {
            var checkbox = document.getElementById("flexCheckChecked");
            var formGroups = document.getElementsByClassName("form-group");

            for (var i = 0; i < formGroups.length; i++) {
                if (checkbox.checked) {
                    formGroups[i].classList.add("active");
                } else {
                    formGroups[i].classList.remove("active");
                }
            }
        }
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
    <script>
        function closeSidebar() {
            var sidebar = document.querySelector('.sidebar');
            sidebar.style.transition = 'left 0.3s ease';
            sidebar.style.left = '-100%';
        }
    </script>
    </div><br><br>
    <header style="position: fixed; top: 0; left: 0; width: 100%; height:13%;  background:#343a40; z-index: 2;">
        <nav>
            <h1 style="display: flex; align-items: center;">
                <img src="{{asset('assets/it.png')}}" class="rounded float-left" alt="Responsive image" style=" margin-left: -2%; width: 15%; border-radius: 50px;">
                <!-- Button trigger modal -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            </h1>
        </nav>
    </header><br>
    <!-- Modal --> <br>
    <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-radius: 5px; background-color: rgba(220, 230, 255, 0.8);">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Category Item description</h5>
                    <button type="button" class="fas fa-sign-out-alt" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('dispose')}}" method="POST">
                        @csrf
                        <div class="btn-group">
                            <div class="dropdown-select">
                                <select name="incoming_id">
                                    <option value="">Select Category</option>
                                    @foreach($incomings as $item)
                                    <option value="{{$item->id}}">{{ $item->category.' - '. $item->description}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br><br>
                        </div>
                        <select name="inventory_tag_no">
                            <option value="">Select Inventory Tag No</option>
                            @forelse($deploy as $item)
                            <option value="{{ $item->id }}">{{ $item->inventory_tag_no}}</option>
                            @empty
                            @endforelse
                        </select><br><br>
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

    <div style="display: flex; justify-content: flex-end; margin-right: 4%;">
        <button type="button" class="floating-button" style="padding: 5px; width: 8%; border-color:white; background-color: #205D7A;
   color:white; border-radius:10px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="fas fa-plus"></i> Add New
        </button>
    </div>
    </table>
    <table class="table table-borderless" style="justify-content: center; height: 10%;  width: 79%; margin-left:18%; background-color: white; color: black; font-size:13px;">
        <thead class="thead-light">
            <tr>
                <th scope="col" style="text-align: center;">ITEM CATEGORY</th>
                <th scope="col" style="text-align: center;">DESCRIPTION</th>
                <th scope="col" style="text-align: center;">SERIAL NO.</th>
                <th scope="col" style="text-align: center;">INVENTORY TAG NO.</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dispose as $incoming_item)
            <tr>
                <td scope="row" style="text-align: center;">{{$incoming_item->category}}</td>
                <td scope="row" style="text-align: center;">{{$incoming_item->description}}</td>
                <td scope="row" style="text-align: center;">{{$incoming_item->serial_no}}</td>
                <td scope="row" style="text-align: center;">{{$incoming_item->inventory_tag_no}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="image-container">
        <img src="{{asset('assets/pol.png')}}" class="rounded-image" alt="Responsive image">
        <div class="text-overlay">#SubokNA</div>
    </div>
    <script src="https://kit.fontawesome.com/a9c2596192.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>