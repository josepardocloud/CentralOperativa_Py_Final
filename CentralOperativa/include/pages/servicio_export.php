<?php
			$optionsArray = array( 'totals' => array( 'IdServicio' => array( 'totalsType' => '' ),
'NroContrato' => array( 'totalsType' => '' ),
'FechaContrato' => array( 'totalsType' => '' ),
'ServicioClase' => array( 'totalsType' => '' ),
'IdTipoServicio' => array( 'totalsType' => '' ),
'DocTitular' => array( 'totalsType' => '' ),
'Titular' => array( 'totalsType' => '' ),
'Observacion' => array( 'totalsType' => '' ),
'DocFallecido' => array( 'totalsType' => '' ),
'Fallecido' => array( 'totalsType' => '' ),
'Sexo' => array( 'totalsType' => '' ),
'FHFallecimiento' => array( 'totalsType' => '' ),
'IdCausa' => array( 'totalsType' => '' ),
'Recojo' => array( 'totalsType' => '' ),
'Instalacion' => array( 'totalsType' => '' ),
'Despacho' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'NroContrato',
'FechaContrato',
'ServicioClase',
'IdTipoServicio',
'DocTitular',
'Titular',
'Observacion',
'DocFallecido',
'Fallecido',
'Sexo',
'FHFallecimiento',
'IdCausa',
'Recojo',
'Instalacion',
'Despacho' ),
'exportFields' => array( 'NroContrato',
'FechaContrato',
'ServicioClase',
'IdTipoServicio',
'DocTitular',
'Titular',
'Observacion',
'DocFallecido',
'Fallecido',
'Sexo',
'FHFallecimiento',
'IdCausa',
'Recojo',
'Instalacion',
'Despacho' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'NroContrato' => array( 'export_field1' ),
'FechaContrato' => array( 'export_field2' ),
'ServicioClase' => array( 'export_field3' ),
'IdTipoServicio' => array( 'export_field4' ),
'DocTitular' => array( 'export_field5' ),
'Titular' => array( 'export_field6' ),
'Observacion' => array( 'export_field7' ),
'DocFallecido' => array( 'export_field8' ),
'Fallecido' => array( 'export_field9' ),
'Sexo' => array( 'export_field10' ),
'FHFallecimiento' => array( 'export_field11' ),
'IdCausa' => array( 'export_field12' ),
'Recojo' => array( 'export_field13' ),
'Instalacion' => array( 'export_field14' ),
'Despacho' => array( 'export_field15' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_field15' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field1' => array( 'field' => 'NroContrato',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'FechaContrato',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'ServicioClase',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'IdTipoServicio',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'DocTitular',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'Titular',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'Observacion',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'DocFallecido',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'Fallecido',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'Sexo',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'FHFallecimiento',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'IdCausa',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'Recojo',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'Instalacion',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'Despacho',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>