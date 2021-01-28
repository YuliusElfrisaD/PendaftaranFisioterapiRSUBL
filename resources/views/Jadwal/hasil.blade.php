@extends('layouts.isi')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-book"></i> Cek Kuota 
            </div>
            @if ($message = Session::get('message'))
            <div class="alert alert-success martop-sm">
                <p>{{ $message }}</p>
            </div>
            @endif

            @if ($message = Session::get('flash_message_danger'))
            <div class="alert alert-danger martop-sm">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="card-body">
                <div>
                    <center><h5>Kuota untuk tanggal : {{ Carbon\Carbon::parse($tgl_cek)->format('d-m-Y')  }} </h5></center>
                </div><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="table table-hover">
                                <center>
                                    <table class="table-md">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th align="center">Jam Terapi</th>
                                                <th align="center">Kuota</th>
                                                <th align="center" style="color: red">Terisi</th>
                                                <th align="center" style="color: greenyellow">Tersedia</th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                            @foreach ($hasil as $value)
                                            <tr>
                                                <td>07:00</td>
                                                <td>4</td>
                                                <td>{{ $value->HASIL7  }}</td>
                                                @if(4-$value->HASIL7 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 4-$value->HASIL7  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>07:50</td>
                                                <td>4</td>
                                                <td>{{ $value->HASIL8  }}</td>
                                                @if(4-$value->HASIL8 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 4-$value->HASIL8  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>08:40</td>
                                                <td>4</td>
                                                <td>{{ $value->HASIL9  }}</td>
                                                @if(4-$value->HASIL9 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 4-$value->HASIL9  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>09:30</td>
                                                <td>6</td>
                                                <td>{{ $value->HASIL10   }}</td>
                                                @if(6-$value->HASIL10 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 6-$value->HASIL10  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>10:20</td>
                                                <td>6</td>
                                                <td>{{ $value->HASIL11  }}</td>
                                                @if(6-$value->HASIL11 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 6-$value->HASIL11  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr> 
                                                <td>11:10</td>
                                                <td>6</td>
                                                <td>{{ $value->HASIL12  }}</td>
                                                @if(6-$value->HASIL12 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 6-$value->HASIL12  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr> 
                                                <td>12:30</td>
                                                <td>6</td>
                                                <td>{{ $value->HASIL13  }}</td>
                                                @if(6-$value->HASIL13 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 6-$value->HASIL13  }}</td>                                                
                                                @endif
                                            </tr>
                                            @endforeach 
                                        </tbody>
                                    </table>
                                </center>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="table table-hover">
                                <center>
                                    <table class="table-md">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th align="center">Jam Terapi</th>
                                                <th align="center">Kuota</th>
                                                <th align="center" style="color: red">Terisi</th>
                                                <th align="center" style="color: greenyellow">Tersedia</th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                            @foreach ($hasil as $value)
                                            <tr> 
                                                <td>13:20</td>
                                                <td>6</td>
                                                <td>{{ $value->HASIL14  }}</td>
                                                @if(6-$value->HASIL14 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 6-$value->HASIL14  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>14:10</td>
                                                <td>6</td>
                                                <td>{{ $value->HASIL15  }}</td>
                                                @if(6-$value->HASIL15 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 6-$value->HASIL15  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>15:00</td>
                                                <td>6</td>
                                                <td>{{ $value->HASIL16  }}</td>
                                                @if(6-$value->HASIL16 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 6-$value->HASIL16  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>15:50</td>
                                                <td>6</td>
                                                <td>{{ $value->HASIL17  }}</td>
                                                @if(6-$value->HASIL17 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 6-$value->HASIL17  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>16:40</td>
                                                <td>4</td>
                                                <td>{{ $value->HASIL18   }}</td>
                                                @if(4-$value->HASIL18 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 4-$value->HASIL18  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>17:30</td>
                                                <td>4</td>
                                                <td>{{ $value->HASIL19  }}</td>
                                                @if(4-$value->HASIL19 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 4-$value->HASIL19  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr> 
                                                <td>18:50</td>
                                                <td>4</td>
                                                <td>{{ $value->HASIL20  }}</td>
                                                @if(4-$value->HASIL20 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 4-$value->HASIL20  }}</td>                                                
                                                @endif
                                            </tr>
                                            <tr> 
                                                <td>19:40</td>
                                                <td>4</td>
                                                <td>{{ $value->HASIL21  }}</td>
                                                @if(4-$value->HASIL21 === 0)
                                                <td bgcolor="red" style="color: white">PENUH</td>  
                                                @else
                                                <td>{{ 4-$value->HASIL21  }}</td>                                                
                                                @endif
                                            </tr>
                                            @endforeach 
                                        </tbody>
                                    </table>
                                </center>
                            </div>                                           
                        </div>   
                    </div>                      
                </div>
            </div>
        </div>
    </div>

    @endsection