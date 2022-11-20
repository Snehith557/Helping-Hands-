create table items with attrs itm name ...
based on donor table update quantity attr 
UPDATE items i
SET item_quantity=(SELECT COUNT(*)
                   FROM donor d
                   WHERE d.Donation=i.item_name)
build reciever table
based on number of requests update item table