<a href="designation/create" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          create
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                       
 <table class="table table-hover" id="value-table">
                      <thead>
                        <tr>
                          <th>Name</th>
    
                           </tr>
                      </thead>
                      <tbody>
                           
                        @foreach($designation as $desg)
                        <tr>
                          <td>{{$desg->Name}}&nbsp;&nbsp;</td>
                           
                         
                          <td> 
                          </td>
                          </tr>
                         @endforeach                       
                      </tbody>
                    </table>