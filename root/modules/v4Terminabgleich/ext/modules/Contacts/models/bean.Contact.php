<?php return; ?>

relationships
    contact_v4_termine
		key: id
		target_bean: v4Terminabgleich
		target_key: contact_id
		relationship_type: one-to-many
links
    v4_termine
		relationship: contact_v4_termine
		vname: LBL_V4_TERMINE
