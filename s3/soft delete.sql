ALTER table tbl_user ADD is_deleted bull (false);

UPDATE table tbl_user SET is_deleted=(true) WHERE id=1;