SELECT * FROM data_oldcase
JOIN data_phitsanulok ON data_phitsanulok.id_phitsanulok = data_oldcase.id_phitsanulok
JOIN data_phetchabun ON data_phetchabun.id_phetchabun = data_phitsanulok.id_phetchabun
JOIN data_chiangmai ON data_chiangmai.id_chiangmai = data_phetchabun.id_chiangmai
JOIN data_chiangrai ON data_chiangrai.id_chiangrai = data_chiangmai.id_chiangrai
WHERE id_data_oldcase


SELECT * FROM t1 join t2 on t1.id1 = t2.id1
JOIN data_phitsanulok on data_phitsanulok.id_phetchabun = 




/* เรียกดูข้อมูลสองตาราง ที่ id = 1 */
SELECT OC.gender, OC.career, DP.vehicle
FROM data_oldcase AS OC
	join data_phitsanulok AS DP on OC.id_phitsanulok = DP.id_phitsanulok
WHERE OC.id_data_oldcase = 1

------------------------------------------------------
/* เพิ่มข้อมูลลงตาราง data_member */
INSERT INTO data_member (username, password, email, name, lastname)
VALUES ('mayyo', 'mayyo123', 'mayyo@gmail.com', 'yuwadee', 'rangkhetkan')

------------------------------------------------------
/* ลบข้อมูลจากตาราง data_member คอลัมน์ id_data_member ที่ 4 */
Delete 
FROM data_member
WHERE id_data_member = 4

----------------------------------------------------
/* ลบข้อมูลจากตาราง data_member คอลัมน์ id_data_member ที่เป็น $id_datamember นั้นๆ */
Delete
FROM data_member
WHERE id_data_member = $id_datamember

----------------------------------------------------
/* แก้ไขข้อมูลจากตาราง data_member ให้เปลี่ยนชื่อเป็น ไข่หวาน จาก id_data_member ที่ 3 */
update data_member
	set name = 'ไข่หวาน'
	WHERE id_data_member = 3

----------------------------------------------------
/* แก้ไขข้อมูลจากตาราง data_member ให้เปลี่ยนหลายคอลัมน์ จาก id_data_member ที่ 3 */
update data_member
	set name = 'ไข่หวาน', username = 'kaiwan' , password = '123456'
	WHERE id_data_member = 3
/* กรณีเปลี่ยน username password */

---------------------------------------------------
