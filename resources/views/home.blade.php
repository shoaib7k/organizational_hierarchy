

<div class="table-budget">
    <table class="table table-sm" border="2">
      <tbody>
        @foreach ($divisions as $key=>$value)


        <!-- start division-->
            <tr >
            <td class="division show" rowspan="2">
                <div class="company">
                <form>Division
                    <input type="text" value={{$divisions[$key]->name}} readonly="">
                </form>
                </div>
            </td>
            <td class="department admin" rowspan="2">
                <div class="company">
                  <form>
                    @foreach ($divisions[$key]->employees as $key2=>$value2)
                    @if ($divisions[$key]->employees[$key2]->pivot->division_lead==1)
                    <p>{{$divisions[$key]->employees[$key2]->firstName.$divisions[$key]->employees[$key2]->lastName}}<span  style="color:blue">&nbsp; Division Lead</span></p>
                    @endif
                    @endforeach

                    @foreach ($divisions[$key]->employees as $key2=>$value2)

                    @if ($divisions[$key]->employees[$key2]->pivot->division_lead==0)

                    <form>Division Employee
                        <input type="text" value={{$divisions[$key]->employees[$key2]->firstName.$divisions[$key]->employees[$key2]->lastName}} readonly>
                      </form>

                    @endif


                    @endforeach

                  </form>
                </div>
              </td>



             {{-- {{$departments}} --}}

                <!-- start department-->
                @foreach ($divisions[$key]->departments as $departments)
                <td class="department show">
                    <div class="company">
                    <form>Department
                        <input type="text" value={{$departments->name}} readonly>
                    </form>
                    </div>

                </td>


            <!-- end department-->
            <!-- start teams-->



                <td class="teams show">
                    <div class="team admin">
                    <div class="company">
                        @foreach ($departments->employees as $key2=>$value2)
                            @if ($departments->employees[$key2]->pivot->department_lead==1)
                                <form>
                                    <p>{{$departments->employees[$key2]->firstName}}{{$departments->employees[$key2]->lastName}}<span style="color: lightblue">&nbsp; Department Lead</span></p>
                                </form>
                            @endif

                        @endforeach


                    </div>
                    </div>


                    <div class="team show">
                        <div class="company">
                            @foreach ($departments->employees as $key2=>$value2)
                            {{-- {{$departments->employees}} --}}
                            @if ($departments->employees[$key2]->pivot->department_lead==0)


                                <form>Department Employee


                                    <input type="text" value={{$departments->employees[$key2]->firstName.$departments->employees[$key2]->lastName}} readonly>
                                </form>
                            @endif

                            @endforeach
                        </div>
                    </div>





                    <div class="team show">
                        <div class="company">
                            @foreach ($departments->teams as $key3=>$value3)

                            <form>Team
                            <input type="text" value={{$departments->teams[$key3]->name}} readonly>
                            </form>
                            <div class="team show">
                                <div class="company">


                                @foreach ($departments->teams[$key3]->employees as $key4=>$value4)
                                    @if($departments->teams[$key3]->employees[$key4]->pivot->team_lead==1)
                                    <form>
                                        <p>{{$departments->teams[$key3]->employees[$key4]->firstName.$departments->teams[$key3]->employees[$key4]->lastName}}<span style="color: rgb(201, 231, 30)">&nbsp; Team Lead</span></p>
                                    </form>
                                    @endif
                                    @endforeach

                                </div>
                              </div>
                            <div class="team show">
                                <div class="company">
                                    @foreach ($departments->teams[$key3]->employees as $key4=>$value4)
                                    @if($departments->teams[$key3]->employees[$key4]->pivot->team_lead==0)
                                            <form>Team Employee
                                                <input type="text" value={{$departments->teams[$key3]->employees[$key4]->firstName.$departments->teams[$key3]->employees[$key4]->lastName}} readonly>
                                            </form>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                </td>
            </tr>

            @endforeach
        @endforeach
      </tbody>
    </table>
</div>


