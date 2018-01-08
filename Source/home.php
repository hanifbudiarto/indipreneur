<?php include("header.php");?>

<div class="page secondary">
    <div class="page-header">
        <div class="page-header-content">
            <h1 class="fg-color-red">Data<big class="fg-color-teal">UKM</big></h1>
        </div>
    </div>
    
    <div class="page-region">
        <div class="page-region-content">
            <div class="span10">
                <h3>Search by</h3>
                <div class="input-control select text span6">
                    <select style="width: 150px">
                        <option value="NAMAUKM">nama ukm</option>
                        <option value="ALAMAT">alamat ukm</option>
                        <option value="KELOMPOKBINAAN">kelompok binaan</option>
                        <option value="WITEL">witel</option>
                        <option value="DATEL">datel</option>
                    </select>
                    <input type="text" placeholder="search" style="width: 240px" />
                    <button class="btn-search"></button>
                </div>
                
                <table class="bordered striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kel. Binaan</th>
                            <th>CP</th>
                            <th>Witel</th>
                            <th>Datel</th>
                            <th>Hasil Call</th>
                            <th>Tgl Call</th>
                            <th>Shift Pel.</th>
                            <th>Status</th>
                            <th>Tgl Status</th>
                            <th>Ket.</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
                                <div style="display: table-cell; width: 150px;">Id UKM</div>
                                <div style="display: table-cell; width: 15px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Nama UKM</div>
                                <div style="display: table-cell; width: 15px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Alamat</div>
                                <div style="display: table-cell; width: 15px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Kelompok Binaan</div>
                                <div style="display: table-cell; width: 15px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Contact Person</div>
                                <div style="display: table-cell; width: 15px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Witel</div>
                                <div style="display: table-cell; width: 15px;">:</div>
                                <div style="display: table-cell; width: 300px;">
                                    <div class="input-control text">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div style="display: table-row;">
                                <div style="display: table-cell; width: 150px;">Datel</div>
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
