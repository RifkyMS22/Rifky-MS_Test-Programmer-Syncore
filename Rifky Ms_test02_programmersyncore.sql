1.	SELECT member.*
FROM member
JOIN instansi ON member.id_instansi = instansi.id_instansi
JOIN kecamatan ON instansi.id_kecamatan = kecamatan.id_kecamatan
JOIN kabupaten ON kecamatan.id_kabupaten = kabupaten.id_kabupaten
JOIN provinsi ON kabupaten.id_provinsi = provinsi.id_provinsi
WHERE provinsi.nama_provinsi = 'Sumatera Utara' AND kabupaten.nama_kabupaten = 'nama_kabupaten';

2.	SELECT provinsi.*
FROM provinsi
LEFT JOIN member ON provinsi.id_provinsi = member.id_provinsi
WHERE member.id_provinsi IS NULL;

3.	SELECT kabupaten.*
FROM kabupaten
LEFT JOIN kecamatan ON kabupaten.id_kabupaten = kecamatan.id_kabupaten
LEFT JOIN instansi ON kecamatan.id_kecamatan = instansi.id_kecamatan
LEFT JOIN member ON instansi.id_instansi = member.id_instansi
WHERE member.id_instansi IS NULL;

4.	SELECT kecamatan.*
FROM kecamatan
LEFT JOIN instansi ON kecamatan.id_kecamatan = instansi.id_kecamatan
LEFT JOIN member ON instansi.id_instansi = member.id_instansi
WHERE member.id_instansi IS NULL;

5.	SELECT member.nama
FROM member
JOIN instansi ON member.id_instansi = instansi.id_instansi
JOIN kecamatan ON instansi.id_kecamatan = kecamatan.id_kecamatan
JOIN kabupaten ON kecamatan.id_kabupaten = kabupaten.id_kabupaten
WHERE kabupaten.nama_kabupaten = 'Simalungun';

6.	SELECT kabupaten.nama_kabupaten, COUNT(instansi.id_instansi) AS jumlah_instansi
FROM kabupaten
LEFT JOIN kecamatan ON kabupaten.id_kabupaten = kecamatan.id_kabupaten
LEFT JOIN instansi ON kecamatan.id_kecamatan = instansi.id_kecamatan
WHERE kabupaten.nama_kabupaten IN ('Bireuen', 'Bener Meriah')
GROUP BY kabupaten.nama_kabupaten;

7.	SELECT *FROM member WHERE nama LIKE 'M%';

8.	SELECT member.email
FROM member
JOIN instansi ON member.id_instansi = instansi.id_instansi
JOIN kecamatan ON instansi.id_kecamatan = kecamatan.id_kecamatan
JOIN kabupaten ON kecamatan.id_kabupaten = kabupaten.id_kabupaten
JOIN provinsi ON kabupaten.id_provinsi = provinsi.id_provinsi
WHERE member.email LIKE '%no%' AND provinsi.nama_provinsi = 'Sumatera Utara';

9.	SELECT * FROM member WHERE id_instansi IN (SELECT id_instansi FROM instansi WHERE kode_instansi = '2004');

10.	SELECT * FROM member
JOIN instansi ON member.id_instansi = instansi.id_instansi
JOIN kecamatan ON instansi.id_kecamatan = kecamatan.id_kecamatan
WHERE kecamatan.kode_kecamatan LIKE '%.08.%';
