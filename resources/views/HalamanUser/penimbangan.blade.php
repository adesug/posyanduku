<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penimbangan</title>

    @include('Template.style')
</head>

<body>
    @include('Template.navbar')

    @include('Template.sidebar')
    <div class="content-wrapper">
        <div class="container-fluid ">
            <!-- Content Header (Page header) -->
            <div class="text-xl-center">
            <h3 >Data Penimbangan Balita</h3>
               
            </div>
            

            
            <div class="container">
                <div class="mb-2">
                <a href="{{route('addpenimbangan')}}" class="btn btn-success "> Tambah Data <i
                            class="fas fa-plus-square"></i></a>
                </div>
                <table id="table-penimbangan" class="table table-bordered table-striped">
                    <thead class="bg-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Balita</th>
                            <th>Tanggal</th>
                            <th>BB(Kg)</th>
                            <th>IMD</th>
                            <th>KIA</th>
                            <th>Vitamin</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $nomor=1;
                        @endphp
                        @foreach ($penimbangans as $index =>$penimbangan )
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $penimbangan->registrasibalitas->namabalita }}</td>
                         
                            <td>{{date('d F Y', strtotime($penimbangan->tanggal)) }}</td>
                            <td>{{ $penimbangan->beratbadan}}</td>
                            <td>{{ $penimbangan->imp }}</td>
                            <td>{{ $penimbangan->kia }}</td>
                            <td>{{ $penimbangan->vitamin }}</td>
                            <td>
                           
                                <a href="{{route('editpenimbangan',$penimbangan->id) }}" class="btn btn-warning"><i
                                        class="fas fa-pen-alt"></i></a>

                                <a href="{{route('deletepenimbangan', $penimbangan->id) }}" class="btn btn-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                            </td>
                            
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <br><br><br><br><br>

            </div>


        </div>
    </div>



    @include('Template.footer')
    @include('Template.script')
    <script>
      $(document).ready(function(){
        $('#table-penimbangan').DataTable({});
      })
    </script>
    @include('sweetalert::alert')



</body>

</html>
