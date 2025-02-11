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
    </header><br><br><br>
    <!-- Modal --> <br>
    <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-radius: 5px; background-color: #ffff">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Personnel</h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('personnel')}}" method="POST">
                        @csrf
                        <p>Please Enter your name</p>
                        <input type="text" name="personnel_name" style="padding: 8px;">
                        <br><br>
                        <div class="btn-group">
                            <div class="dropdown-select">
                                <select name="position">
                                    <option value="Select a Position" disabled>Select a Position</option>
                                    <option value="Executive Vice President & Corporate Secretary">Executive Vice President & Corporate Secretary</option>
                                    <option value="Vice President">Vice President</option>
                                    <option value="Senior Bonds Manager">Senior Bonds Manager</option>
                                    <option value="Bonds Supervisor">Bonds Supervisor</option>
                                    <option value="Bonds Assistant">Bonds Assistant</option>
                                    <option value="Bonds Clerk">Bonds Clerk</option>
                                    <option value="Assistant Treasurer">Assistant Treasurer</option>
                                    <option value="Payroll Manager">Payroll Manager</option>
                                    <option value="Disbursement Officer">Disbursement Officer</option>
                                    <option value="Cashier">Cashier</option>
                                    <option value="Assistant Cashier">Assistant Cashier</option>
                                    <option value="Payroll Assistant">Payroll Assistant</option>
                                    <option value="Treasury Staff">Treasury Staff</option>
                                    <option value="Marketing Manager">Marketing Manager</option>
                                    <option value="Marketing Supervisor">Marketing Supervisor</option>
                                    <option value="Senior Marketing Associate">Senior Marketing Associate</option>
                                    <option value="Marketing Assistant">Marketing Assistant</option>
                                    <option value="Marketing Staff">Marketing Staff</option>
                                    <option value="Assistant Vice President">Assistant Vice President</option>
                                    <option value="IT Manager/Administrator Database System">IT Manager/Administrator Database System</option>
                                    <option value="IT Supervisor">IT Supervisor</option>
                                    <option value="IT Assistant">IT Assistant</option>
                                    <option value="Assistant Manager">Assistant Manager</option>
                                    <option value="Collection Supervisor">Collection Supervisor</option>
                                    <option value="Collection Assistant">Collection Assistant</option>
                                    <option value="Credit and Collection Staff">Credit and Collection Staff</option>
                                    <option value="Assistant Manager - Audit and Accounting">Assistant Manager - Audit and Accounting</option>
                                    <option value="Junior Internal Auditor">Junior Internal Auditor</option>
                                    <option value="Claims Manager">Claims Manager</option>
                                    <option value="Claims Consultant">Claims Consultant</option>
                                    <option value="Claims Supervisor">Claims Supervisor</option>
                                    <option value="Claims Assistant">Claims Assistant</option>
                                    <option value="In-House Adjuster">In-House Adjuster</option>
                                    <option value="Claims Adjuster">Claims Adjuster</option>
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="Senior Vice President">Senior Vice President</option>
                                    <option value="Senior Vice President & Chief Underwritting">Senior Vice President & Chief Underwritting</option>
                                    <option value="Reinsurance Supervisor">Reinsurance Supervisor</option>
                                    <option value="Senior Reinsurance Associate">Senior Reinsurance Associate</option>
                                    <option value="Fire Insurance Underwritter">Fire Insurance Underwritter</option>
                                    <option value="Motor/Policy Assistant">Motor/Policy Assistant</option>
                                    <option value="Underwritting Assistant">Underwritting Assistant</option>
                                    <option value="Legal Assistant/Liason Officer">Legal Assistant/Liason Officer</option>
                                    <option value="Human Resources Supervisor">Human Resources Supervisor</option>
                                    <option value="Administrative Manager">Administrative Manager</option>
                                    <option value="Admin Assistant">Admin Assistant</option>
                                    <option value="Admin Staff/Receptionist">Admin Staff/Receptionist</option>
                                    <option value="Property Custodian">Property Custodian</option>
                                    <option value="Forms Custodian">Forms Custodian</option>
                                    <option value="Messenger/Utility Man">Messenger/Utility Man</option>
                                    <option value="Housekeeping Staff">Housekeeping Staff</option>
                                    <option value="Company Driver">Company Driver</option>
                                </select>
                            </div>
                        </div><br>
                        <script>
                            const dropdownItems = document.querySelectorAll('.dropdown-item');
                            const selectedPositionInput = document.getElementById('selectedPosition');

                            dropdownItems.forEach(function(item) {
                                item.addEventListener('click', function() {
                                    selectedPositionInput.value = item.textContent;
                                });
                            });
                        </script><br>
                        <p>Enter department</p>
                        <input type="text" name="department" style="padding: 8px;"><br><br>
                        <p>Enter office</p>
                        <input type="text" name="office" style="padding: 8px;">
                        <div class="form-check">
                        </div>
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
    <table class="table table-borderless" style="justify-content: center; height: 10%;  width: 79%; margin-left:18%; background-color: white; color: black; font-size:13px;">
        <thead class="thead-light">
            <tr class="table-light">
                <th scope="col" style="text-align: center;">PERSONNEL NAME</th>
                <th scope="col" style="text-align: center;">POSITION</th>
                <th scope="col" style="text-align: center;">DEPARTMENT</th>
                <th scope="col" style="text-align: center;">OFFICE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personnel as $item)
            <tr class="table-light">
                <td scope="row" style="text-align: center;">{{$item->personnel_name}}</td>
                <td scope="row" style="text-align: center;">{{$item->position}}</td>
                <td scope="row" style="text-align: center;">{{$item->department}}</td>
                <td scope="row" style="text-align: center;">{{$item->office}}</td>
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