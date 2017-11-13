<?php return; ?>

detail
	type: bean
	bean_file: modules/v4Terminabgleich/v4Terminabgleich.php
	reportable: true
	table_name: v4_terminabgleich
	primary_key: id
	display_name
		type: prefixed
		fields
			- contact
			- day
fields
	app.id
	app.date_entered
	app.date_modified
	app.modified_user
	app.assigned_user
	app.created_by_user
	app.deleted
    contact
        type: ref
        bean_name: Contact
        vname: LBL_CONTACT
        required: true
    day
        type: enum
        options: v4_weekdays_dom
        required: true
        vname: LBL_DAY
    zeit
        type: enum
        options: v4_zeiten_dom
        required: true
        vname: LBL_ZEIT
    status
        type: status
        options: v4_terminabgleich_status_dom
        vname: LBL_STATUS
        default: unbekannt
    bemerkung
        type: text
        vname: LBL_BEMERKUNG
