<a href="user/create" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          create
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                       
 <table class="table table-hover" id="value-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>FK_department</th>
                           <th>FK_designation</th>
                           <th>phone number</th>
                        </tr>
                      </thead>
                      <tbody>
                           
                        @foreach($Users as $user)
                        <tr>
                          <td>{{$user->Name}}&nbsp;&nbsp;</td>
                           <td>{{$user->FK_department }}&nbsp;&nbsp;</td>
                           <td>{{$user->FK_designation }}&nbsp;&nbsp;</td>
                           <td>{{$user->phone_number }}&nbsp;&nbsp;</td>
                         
                          <td> 
                          </td>
                          </tr>
                         @endforeach                       
                      </tbody>
                    </table>