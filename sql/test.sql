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