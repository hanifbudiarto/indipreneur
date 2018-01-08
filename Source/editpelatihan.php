<?php include("header.php");?>

<div class="page secondary">
    <div class="page-header">
        <div class="page-header-content">
             <h1 class="fg-color-teal">edit<small class="fg-color-red">Pelatihan</small></h1>
             <a href="/" class="back-button big page-back"></a>
        </div>
    </div>
    
    <div class="page-region">
        <div class="page-region-content">
            <div class="span10">
                <div>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Id Pelatihan</div>
                                <div style="display: table-cell; width: 15px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Tanggal Pelatihan</div>
                                <div style="display: table-cell; width: 10px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text datepicker" data-role="datepicker">
                                        <input type="text" />
                                        <button class="btn-date"></button>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Tempat Pelatihan</div>
                                <div style="display: table-cell; width: 15px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text">
                                        <select>
                                            <option value="margoyoso">Margoyoso</option>
                                            <option value="dinoyo">Dinoyo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Sesi</div>
                                <div style="display: table-cell; width: 15px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;"></div>
                                <div style="display: table-cell; width: 220px;"></div>
                                <div style="display: table-cell; width: 100px;">
                                    <input type="submit" value="edit" class="bg-color-blue"/>
                                </div>
                            </div>
                 </div>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php");?>
