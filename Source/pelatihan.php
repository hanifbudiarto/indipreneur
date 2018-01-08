<?php include("header.php");?>

<div class="page secondary">
    <div class="page-header">
        <div class="page-header-content">
            <h1 class="fg-color-red">Data<big class="fg-color-teal">Pelatihan</big></h1>
        </div>
    </div>
    
    <div class="page-region">
        <div class="page-region-content">
            <div class="span10">
                <table class="bordered striped">
                    <thead>
                        <tr>
                            <th>Id Pelatihan</th>
                            <th>Tanggal Pelatihan</th>
                            <th>Tempat Pelatihan</th>
                            <th>Sesi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="toolbar">
                                    <button><i class="icon-pencil"></i></button>
                                    <button><i class="icon-remove"></i></button>
                                </div>
                            </td>
                        </tr>    
                    </tbody>
                    <tfoot></tfoot>
                </table>
                <div>
                    <div style="display: table-row;">
                        <div style="display: table-cell; width: 600px;"></div>
                        <div style="display: table-cell;">
                            <button class="image-button bg-color-darken fg-color-white">Save to excel<img class="bg-color-teal" src="images/download-32.png"/></button>
                        </div>
                    </div>
                </div>
                
                <ul class="accordion span10" data-role="accordion">
                    <li>
                        <a href="#">tambah data</a>
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
                                    <input type="submit" value="tambah" class="bg-color-blue"/>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php");?>
