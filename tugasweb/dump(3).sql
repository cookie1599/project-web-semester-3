--
-- PostgreSQL database dump
--

-- Dumped from database version 10.6
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
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: divisi; Type: TABLE; Schema: public; Owner: fikri2
--

CREATE TABLE public.divisi (
    id integer NOT NULL,
    kode character varying(10),
    nama character varying(50),
    manager character varying(45)
);


ALTER TABLE public.divisi OWNER TO fikri2;

--
-- Name: divisi_id_seq; Type: SEQUENCE; Schema: public; Owner: fikri2
--

CREATE SEQUENCE public.divisi_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.divisi_id_seq OWNER TO fikri2;

--
-- Name: divisi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fikri2
--

ALTER SEQUENCE public.divisi_id_seq OWNED BY public.divisi.id;


--
-- Name: jatah_cuti; Type: TABLE; Schema: public; Owner: fikri2
--

CREATE TABLE public.jatah_cuti (
    id integer NOT NULL,
    tahun integer,
    jumlah integer,
    nip character varying(20)
);


ALTER TABLE public.jatah_cuti OWNER TO fikri2;

--
-- Name: jatah_cuti_id_seq; Type: SEQUENCE; Schema: public; Owner: fikri2
--

CREATE SEQUENCE public.jatah_cuti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.jatah_cuti_id_seq OWNER TO fikri2;

--
-- Name: jatah_cuti_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fikri2
--

ALTER SEQUENCE public.jatah_cuti_id_seq OWNED BY public.jatah_cuti.id;


--
-- Name: overtime; Type: TABLE; Schema: public; Owner: fikri2
--

CREATE TABLE public.overtime (
    id integer NOT NULL,
    tanggal_mulai date,
    tanggal_akhir date,
    jam_mulai time without time zone,
    jam_akhir time without time zone,
    keterangan character varying(45),
    statis character(1),
    pegawai_nip character varying(20)
);


ALTER TABLE public.overtime OWNER TO fikri2;

--
-- Name: overtime_id_seq; Type: SEQUENCE; Schema: public; Owner: fikri2
--

CREATE SEQUENCE public.overtime_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.overtime_id_seq OWNER TO fikri2;

--
-- Name: overtime_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fikri2
--

ALTER SEQUENCE public.overtime_id_seq OWNED BY public.overtime.id;


--
-- Name: pegawai; Type: TABLE; Schema: public; Owner: fikri2
--

CREATE TABLE public.pegawai (
    nip character varying(20) NOT NULL,
    gender character(1),
    tmp_lahir character varying(45),
    tgl_lahir date,
    telpon character varying(20),
    alamat character varying(100),
    divisi_id integer
);


ALTER TABLE public.pegawai OWNER TO fikri2;

--
-- Name: divisi id; Type: DEFAULT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.divisi ALTER COLUMN id SET DEFAULT nextval('public.divisi_id_seq'::regclass);


--
-- Name: jatah_cuti id; Type: DEFAULT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.jatah_cuti ALTER COLUMN id SET DEFAULT nextval('public.jatah_cuti_id_seq'::regclass);


--
-- Name: overtime id; Type: DEFAULT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.overtime ALTER COLUMN id SET DEFAULT nextval('public.overtime_id_seq'::regclass);


--
-- Data for Name: divisi; Type: TABLE DATA; Schema: public; Owner: fikri2
--

INSERT INTO public.divisi VALUES (1, 'K001', 'Fikri', 'Ihsan');
INSERT INTO public.divisi VALUES (2, 'K002', 'abiyyu', 'ihsanul');
INSERT INTO public.divisi VALUES (3, 'K003', 'Atrisa', 'Endya');
INSERT INTO public.divisi VALUES (4, 'K004', 'Sahrul', 'Hidayah');


--
-- Data for Name: jatah_cuti; Type: TABLE DATA; Schema: public; Owner: fikri2
--

INSERT INTO public.jatah_cuti VALUES (1, 2018, 7, '0110217034');
INSERT INTO public.jatah_cuti VALUES (2, 2018, 5, '0110217043');
INSERT INTO public.jatah_cuti VALUES (3, 2018, 8, '0110217034');
INSERT INTO public.jatah_cuti VALUES (4, 2018, 6, '0110217012');


--
-- Data for Name: overtime; Type: TABLE DATA; Schema: public; Owner: fikri2
--



--
-- Data for Name: pegawai; Type: TABLE DATA; Schema: public; Owner: fikri2
--

INSERT INTO public.pegawai VALUES ('0110217034', 'L', 'Jakarta', '1999-03-12', '085933716912', 'Bekasi', 1);
INSERT INTO public.pegawai VALUES ('0110217043', 'L', 'Bandung', '1999-02-10', '081289445323', 'tangerang', 2);
INSERT INTO public.pegawai VALUES ('0110217038', 'P', 'Jawa Tengah', '1999-04-05', '081289445323', 'depok', 3);
INSERT INTO public.pegawai VALUES ('0110217012', 'L', 'Sumatra', '1999-05-16', '081289445123', 'Bogor', 4);


--
-- Name: divisi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fikri2
--

SELECT pg_catalog.setval('public.divisi_id_seq', 5, true);


--
-- Name: jatah_cuti_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fikri2
--

SELECT pg_catalog.setval('public.jatah_cuti_id_seq', 5, true);


--
-- Name: overtime_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fikri2
--

SELECT pg_catalog.setval('public.overtime_id_seq', 1, false);


--
-- Name: divisi divisi_kode_key; Type: CONSTRAINT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.divisi
    ADD CONSTRAINT divisi_kode_key UNIQUE (kode);


--
-- Name: divisi divisi_pkey; Type: CONSTRAINT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.divisi
    ADD CONSTRAINT divisi_pkey PRIMARY KEY (id);


--
-- Name: jatah_cuti jatah_cuti_pkey; Type: CONSTRAINT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.jatah_cuti
    ADD CONSTRAINT jatah_cuti_pkey PRIMARY KEY (id);


--
-- Name: overtime overtime_pkey; Type: CONSTRAINT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.overtime
    ADD CONSTRAINT overtime_pkey PRIMARY KEY (id);


--
-- Name: pegawai pegawai_pkey; Type: CONSTRAINT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.pegawai
    ADD CONSTRAINT pegawai_pkey PRIMARY KEY (nip);


--
-- Name: jatah_cuti jatah_cuti_nip_fkey; Type: FK CONSTRAINT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.jatah_cuti
    ADD CONSTRAINT jatah_cuti_nip_fkey FOREIGN KEY (nip) REFERENCES public.pegawai(nip);


--
-- Name: overtime overtime_pegawai_nip_fkey; Type: FK CONSTRAINT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.overtime
    ADD CONSTRAINT overtime_pegawai_nip_fkey FOREIGN KEY (pegawai_nip) REFERENCES public.pegawai(nip);


--
-- Name: pegawai pegawai_divisi_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: fikri2
--

ALTER TABLE ONLY public.pegawai
    ADD CONSTRAINT pegawai_divisi_id_fkey FOREIGN KEY (divisi_id) REFERENCES public.divisi(id);


--
-- PostgreSQL database dump complete
--

