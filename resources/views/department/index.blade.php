<a href="department/create" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          create
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                       
 <table class="table table-hover" id="value-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Action</th>
                           </tr>
                      </thead>
                      <tbody>
                           
                        @foreach($department as $dept)
                        <tr>
                          <td>{{$dept->Name}}&nbsp;&nbsp;</td>
                              
                          <td> 
                          </td>
                          </tr>
                         @endforeach                       
                      </tbody>
                    </table>