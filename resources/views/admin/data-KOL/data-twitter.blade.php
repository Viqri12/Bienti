@extends('layouts.zeis.app')
@section('content')
        <div class="data-table-area ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <div class="">
                                <div class="mt-3 mb-3">
                                    <span class="fw-bold" style="font-size: 20px;">Data Table Twitter</span>
                                </div>
                            </div>
                            <div class="">
                                <div class=" table-responsive">
                                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                                        <thead>
                                            <tr class="">
                                                <th data-field="state" data-checkbox="true" class="text-center" style="font-size: 12px;">select</th>
                                                <th data-field="id" style="font-size: 12px;">No</th>
                                                <th data-field="name" data-editable="true" class="text-center" style="font-size: 12px;">Name</th>
                                                <th data-field="email" data-editable="true" class="text-center" style="font-size: 12px;">Tier</th>
                                                <th data-field="Followers" data-editable="true" class="text-center" style="font-size: 12px;">Followers</th>
                                                <th data-field="username" data-editable="true" class="text-center" style="font-size: 12px;">Username</th>
                                                @foreach ($listRateCard as $item)
                                                <th data-field="complete" class="text-center" style="font-size: 12px;">{{ $item->name }}</th>
                                                @endforeach
                                                <th data-field="task" data-editable="true" class="text-center" style="font-size: 12px;">Category</th>
                                                <th data-field="date" data-editable="true" class="text-center" style="font-size: 12px;">Domisili</th>
                                                <th data-field="phone" data-editable="true" class="text-center" style="font-size: 12px;">Contact Person</th>
                                                <th data-field="price" data-editable="true" class="text-center" style="font-size: 12px;">Notes</th>
                                                <th data-field="action" class="text-center" style="font-size: 12px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($influencer as $key => $item)
                                            <tr class="text-center" style="font-size: 12px;">
                                                <td>
                                                      <input type="checkbox" class="checkData{{ $key }}" onchange="pilih({
                                                        key : {{ $key }}, 
                                                    })" name="row1">
                                                </td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td> 
                                                    @foreach ($item->sosialmedia as $sosmed_3)
                                                    {{ $sosmed_3->tier }} 
                                                    @endforeach</td>
                                                <td> 
                                                     @foreach ($item->sosialmedia as $sosmed_1)
                                                    {{ $sosmed_1->followers }} 
                                                    @endforeach
                                                </td>
                                                <td class="">
                                                    @foreach ($item->sosialmedia as $sosmed_1)
                                                   {{ $sosmed_1->username }}
                                                    @endforeach
                                                </td>
                                                   @foreach ($item->sosialmedia[0]->rateCard as $sosmed_1)
                                                    <td>
                                                        {{ $sosmed_1->price }}
                                                    </td>
                                                    @endforeach
                                                <td>
                                                    @if(count($item->category_1) > 0)
                                                        @foreach ($item->category_1 as $ctg)
                                                            {{ $ctg->category_2->name }},
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{ $item->domisili}}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td style="width: 200px;" class="text-truncate">
                                                    @foreach ($item->sosialmedia as $sosmed_1)
                                                        {{ $sosmed_1->notes }} 
                                                    @endforeach    
                                                </td>
                                                <td class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('edit-KOL-twitter',$item->id)}}">
                                                        <i class="fa fa-edit text-success" style="font-size: 20px;"></i>
                                                    </a>
                                                    <a href="{{ route('delete-twitter',$item->sosialmedia[0]->id) }}" class="border-0 bg-transparent" onclick="return confirm('Are you sure ?')">
                                                        <i class="fa fa-trash text-danger" style="font-size: 20px;"></i>
                                                    </a>
                                                </td> 
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
         var option = {
                lengthChange: false,
                buttons: [
                    'pdf', 
                    'colvis' ,
                    'selectRows',
                    'selectColumns',
                    'selectCells', 
                    {  
                        extend: 'excelHtml5',
                        exportOptions: {
                            rows: []
                        }
                    }
                ],
                lengthMenu: [
                    [10, 20, 30, 40, 50, 60, 70, 80, -1],
                    [10, 20, 30, 40, 50, 60, 70, 80, "All"]
                ],
                dom :  'Bfrtip'
            }

            var table = $('#example').DataTable(option);
            var checkData = document.querySelectorAll('.checkData')
            //  console.log(checkData)
            
            table.buttons().container()
                .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
            var alldata = table.rows().data();

            function pilih(x){
                var checkInput = document.querySelector(`.checkData${x.key}`)
                console.log(checkInput.checked)
                if (checkInput.checked)
                {
                    var cari = option.buttons[5].exportOptions.rows.find(val => val == x.key)
                    if (!cari) 
                    {
                        option.buttons[5].exportOptions.rows.push(x.key) 
                    }
                    console.log(option.buttons[5].exportOptions.rows) 
                }else{
                    option.buttons[5].exportOptions.rows = option.buttons[5].exportOptions.rows.filter(val => val != x.key)
                }
            }
        </script>
@endsection