@extends('layouts.zeis.app')
@section('content')
        <div class="data-table-area ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <div class="">
                                <div class="mt-3 mb-3">
                                    <span class="fw-bold" style="font-size: 20px;">Data Table Media</span>
                                </div>
                            </div>
                            <div class="">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                                        <thead>
                                            <tr class="">
                                                <th data-field="state" data-checkbox="true" class="text-center" style="font-size: 12px;">Select</th>
                                                <th data-field="id" style="font-size: 12px;">No</th>
                                                <th data-field="name" data-editable="true" class="text-center" style="font-size: 12px;">Name Media</th>
                                                <th data-field="phone" data-editable="true" class="text-center" style="font-size: 12px;">Instagram Link</th>
                                                <th data-field="Followers" data-editable="true" class="text-center" style="font-size: 12px;">Followers</th>
                                                <th data-field="email" data-editable="true" class="text-center" style="font-size: 12px;">Tier</th>
                                                <th data-field="complete" class="text-center" style="font-size: 12px;">IG Photo Feed</th>
                                                <th data-field="Ig_Photo " class="text-center" style="font-size: 12px;">IG Photo Feed Carousel</th>
                                                <th data-field="Feed_Carousel" class="text-center" style="font-size: 12px;">IG Story</th>
                                                <th data-field="Story" class="text-center" style="font-size: 12px;">IG Story With Link</th>
                                                <th data-field="Reels" class="text-center" style="font-size: 12px;">Press Release</th>
                                                <th data-field="attending_event" class="text-center" style="font-size: 12px;">Attending Event</th>
                                                <th data-field="task" data-editable="true" class="text-center" style="font-size: 12px;">Category</th>
                                                <th data-field="date" data-editable="true" class="text-center" style="font-size: 12px;">Contact Person</th>
                                                <th data-field="price" data-editable="true" class="text-center" style="font-size: 12px;">Notes</th>
                                                <th data-field="action" class="text-center" style="font-size: 12px;">Action</th>
                                            </tr>
                                        </thead>    
                                        <tbody>
                                           @foreach ($data as $key => $item)
                                            <tr class="text-center"  style="font-size: 12px;">
                                                <td>
                                                    <input type="checkbox" class="checkData{{ $key }}" onchange="pilih({
                                                        key : {{ $key }},
                                                    })" name="row1">
                                                </td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->ig_link }}</td>
                                                <td>{{ $item->followers }}</td>
                                                <td>{{ $item->tier}}</td>
                                                <td>{{ $item->ig_photo_feed }}</td>
                                                <td>{{ $item->ig_Photo_feed_carousel }}</td>
                                                <td>{{ $item->ig_Story }}</td>
                                                <td>{{ $item->ig_story_with_link }}</td>
                                                <td>{{ $item->press_release }}</td>
                                                <td>{{ $item->attending_event }}</td>
                                                <td>
                                                    @foreach ($item->category1 as $ctg)
                                                        {{ $ctg->name }},
                                                    @endforeach    
                                                </td>
                                                <td>{{ $item->contact_person }}</td>
                                                <td>{{ $item->notes }}</td>
                                                <td class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('edit-media',$item->id)}}">
                                                        <i class="fa fa-edit text-success" style="font-size: 20px;"></i>
                                                    </a>
                                                    <a href="{{ route('delete-media',$item->id) }}" class="border-0 bg-transparent" onclick="return confirm('Are you sure ?')">
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