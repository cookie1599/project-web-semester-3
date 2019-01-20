--
-- PostgreSQL database dump
--

-- Dumped from database version 10.6 (Ubuntu 10.6-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.6 (Ubuntu 10.6-0ubuntu0.18.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Data for Name: divisi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.divisi (id, kode, nama, manager) FROM stdin;
1	K001	Administrasi Sistem	Fathan
2	K002	Web	Adil
3	K003	Marketing	Atrisa
4	K004	Design	Fikri
\.


--
-- Data for Name: jatah_cuti; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.jatah_cuti (id, tahun, jumlah, nip) FROM stdin;
2	2019	8	0110217049
3	2019	15	0110217054
4	2019	6	0110217028
5	2019	11	0110217023
6	2019	9	0110217069
1	2019	19	0110217034
\.


--
-- Data for Name: overtime; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.overtime (id, tanggal_mulai, tanggal_akhir, jam_mulai, jam_akhir, keterangan, status, pegawai_nip) FROM stdin;
5	2019-01-24	2019-01-31	18:00:00	21:00:00	bayar kas	2	0110217034
6	2019-01-08	2019-01-24	18:00:00	21:00:00	membuat web	0	0110217049
\.


--
-- Data for Name: pegawai; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.pegawai (nip, nama, gender, tmp_lahir, tgl_lahir, telpon, alamat, divisi_id) FROM stdin;
0110217049	Herfian	L	Cipayung	1999-10-11	085532756807	Cipayung	1
0110217054	Rabbani	L	Tangerang	1999-03-21	085338757803	Margonda	4
0110217028	Karmila	P	Jawa	1998-04-10	0853387892	Grand Depok	3
0110217023	Nafu	P	Depok	1998-01-15	085134901215	Jakarta	3
0110217069	Rasyad	L	Bogor	1998-01-21	085134901327	Cibinong	1
0110217034	Ihsanul	L	Jakarta	1989-03-12	085933716912	Jakarta	2
\.


--
-- Name: divisi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.divisi_id_seq', 6, true);


--
-- Name: jatah_cuti_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.jatah_cuti_id_seq', 7, true);


--
-- Name: overtime_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.overtime_id_seq', 6, true);


--
-- PostgreSQL database dump complete
--

