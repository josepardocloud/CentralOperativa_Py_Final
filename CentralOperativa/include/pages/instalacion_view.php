<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'ataud' => array( 'preview' => false ),
'urna' => array( 'preview' => false ),
'sede' => array( 'preview' => false ),
'velatrorio' => array( 'preview' => false ),
'personal' => array( 'preview' => false ),
'vehiculos' => array( 'preview' => false ),
'ubigeo' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'FHInstalacion',
'IdAtaud',
'IdUrna',
'IdSedeInstalacion',
'IdVelatorio',
'IdUbigeoInstalacion',
'TurnoInstalacion',
'IdPersonalInstalacion',
'IdVehiculoInstalacion',
'IdServicio' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'FHInstalacion' => array( 'integrated_edit_field13' ),
'IdAtaud' => array( 'integrated_edit_field14' ),
'IdUrna' => array( 'integrated_edit_field15' ),
'IdSedeInstalacion' => array( 'integrated_edit_field16' ),
'IdVelatorio' => array( 'integrated_edit_field17' ),
'IdUbigeoInstalacion' => array( 'integrated_edit_field18' ),
'TurnoInstalacion' => array( 'integrated_edit_field19' ),
'IdPersonalInstalacion' => array( 'integrated_edit_field20' ),
'IdVehiculoInstalacion' => array( 'integrated_edit_field21' ),
'IdServicio' => array( 'integrated_edit_field' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field13' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field17' => 'grid',
'integrated_edit_field18' => 'grid',
'integrated_edit_field19' => 'grid',
'integrated_edit_field20' => 'grid',
'integrated_edit_field21' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field18' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field19' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field20' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field21' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field13' => array( 'field' => 'FHInstalacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'IdAtaud',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'IdUrna',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'IdSedeInstalacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field17' => array( 'field' => 'IdVelatorio',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'IdUbigeoInstalacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field19' => array( 'field' => 'TurnoInstalacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field20' => array( 'field' => 'IdPersonalInstalacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field21' => array( 'field' => 'IdVehiculoInstalacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field' => array( 'field' => 'IdServicio',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>