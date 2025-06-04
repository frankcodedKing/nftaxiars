@extends('dashb.dashlayout')
@section('dashbody')
 <!-- Content Header (Page header) -->
 

      <div class="col-12">
          <!-- Default box -->
            <div class="box box-solid bg-black">
              
              <div class="box-body">
                  <div class="table-responsive">
                      <table class="table table-bordered no-margin">
                        <thead>
                          <tr>
                              <th>S/N</th>
                            <th>Amount</th>
                            <th>date</th>
                            <th>Payment Method</th>
                           <th>Type</th>
                          </tr>
                        </thead>
                        <tbody>

                        @if ($merged->count() > 0)
    @foreach ($merged as $entry)
        <tr>
            <td>
                <a href="#" class="text-yellow hover-warning">
                    {{ $loop->index + 1 }}
                </a>
            </td>
            <td>{{ $entry->amount }}</td>
            <td>{{ $entry->date->format('Y-m-d H:i') }}</td>
            <td>{{ $entry->method }}</td>
            <td>{{ $entry->type }}</td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="5">
            <h5 class="text-yellow hover-warning">You have no transactions yet</h5>
        </td>
    </tr>
@endif

                           </tbody>
                      </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
      </div>

   
   
  <!-- /.content -->
@endsection()
