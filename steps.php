<div class="panel panel-default">
                    <div class="panel-heading">7. Сроки проектирования и поэтапного введения в эксплуатацию энергопринимающих устройств(в том числе по этапам и очередям)</div>
                    <div class="panel-body">
                        <div id="step">
                            <div class="col-lg-12"><h5>Этап № 1</h5></div>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center">Срок проектирования</div>
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            <div class="form-group form-horizontal">
                                                <div class="input-group">
                                                    <input name="startStepPlanning" type="text" class="form-control date"
                                                           placeholder="Начало" 
                                                           data-mask="00.00.0000"
                                                           required autofocus>
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-horizontal">
                                                <div class="input-group">
                                                    <input name="stopStepPlanning" type="text" class="form-control date" 
                                                           placeholder="Окончание" 
                                                           data-mask="00.00.0000"
                                                           required>
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center">Срок ввода в эксплуатацию</div>
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            <div class="form-group form-horizontal">
                                                <div class="input-group">
                                                    <input name="startStepWorking" type="text" class="form-control date"
                                                           placeholder="Начало" 
                                                           data-mask="00.00.0000"
                                                           required>
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-horizontal">
                                                <div class="input-group">
                                                    <input name="stopStepWorking" type="text" class="form-control date" 
                                                           placeholder="Окончание" 
                                                           data-mask="00.00.0000"
                                                           required>
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="steps">
                            <!-- JS add steps -->
                        </div>
                        <!--<div class="col-lg-2 col-lg-offset-10 text-right well-lg"><strong>сумма: 120 кВт</strong></div>-->
                        <div class="col-lg-12">

                            <div class="btn-group">
                                <a href="#" class="btn btn-default" id="addStep">+ Добавить этап</a>
                                <a href="#" class="btn btn-default" id="delStep">- Удалить этап</a>
                            </div>
                        </div>
                    </div>
                </div>
