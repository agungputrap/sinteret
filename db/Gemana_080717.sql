--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.2
-- Dumped by pg_dump version 9.6.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
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


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: foto_gereja; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE foto_gereja (
    id integer NOT NULL,
    gereja_id integer,
    nama_foto character varying(100)
);


ALTER TABLE foto_gereja OWNER TO postgres;

--
-- Name: COLUMN foto_gereja.id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN foto_gereja.id IS '
';


--
-- Name: foto_gereja_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE foto_gereja_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE foto_gereja_id_seq OWNER TO postgres;

--
-- Name: foto_gereja_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE foto_gereja_id_seq OWNED BY foto_gereja.id;


--
-- Name: gereja; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE gereja (
    id integer NOT NULL,
    nama character varying(50),
    tipe_id integer,
    latitude character varying(100),
    longitude character varying(100)
);


ALTER TABLE gereja OWNER TO postgres;

--
-- Name: gereja_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE gereja_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE gereja_id_seq OWNER TO postgres;

--
-- Name: gereja_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE gereja_id_seq OWNED BY gereja.id;


--
-- Name: history_gereja_view; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE history_gereja_view (
    id integer NOT NULL,
    user_id integer,
    gereja_id integer,
    waktu_dilihat time without time zone
);


ALTER TABLE history_gereja_view OWNER TO postgres;

--
-- Name: COLUMN history_gereja_view.id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN history_gereja_view.id IS '
';


--
-- Name: history_gereja_view_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE history_gereja_view_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE history_gereja_view_id_seq OWNER TO postgres;

--
-- Name: history_gereja_view_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE history_gereja_view_id_seq OWNED BY history_gereja_view.id;


--
-- Name: jadwal_ibadah; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE jadwal_ibadah (
    id integer NOT NULL,
    gereja_id integer,
    jam_ibadah character varying(10)
);


ALTER TABLE jadwal_ibadah OWNER TO postgres;

--
-- Name: COLUMN jadwal_ibadah.gereja_id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN jadwal_ibadah.gereja_id IS '

';


--
-- Name: jadwal_ibadah_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE jadwal_ibadah_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE jadwal_ibadah_id_seq OWNER TO postgres;

--
-- Name: jadwal_ibadah_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE jadwal_ibadah_id_seq OWNED BY jadwal_ibadah.id;


--
-- Name: tipe_gereja; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE tipe_gereja (
    id integer NOT NULL,
    nama character varying(25),
    nama_lengkap character varying(50)
);


ALTER TABLE tipe_gereja OWNER TO postgres;

--
-- Name: tipe_gereja_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipe_gereja_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipe_gereja_id_seq OWNER TO postgres;

--
-- Name: tipe_gereja_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipe_gereja_id_seq OWNED BY tipe_gereja.id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "user" (
    id integer NOT NULL,
    google_id character varying,
    nama character varying,
    gambar character varying
);


ALTER TABLE "user" OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_id_seq OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_id_seq OWNED BY "user".id;


--
-- Name: foto_gereja id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY foto_gereja ALTER COLUMN id SET DEFAULT nextval('foto_gereja_id_seq'::regclass);


--
-- Name: gereja id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY gereja ALTER COLUMN id SET DEFAULT nextval('gereja_id_seq'::regclass);


--
-- Name: history_gereja_view id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY history_gereja_view ALTER COLUMN id SET DEFAULT nextval('history_gereja_view_id_seq'::regclass);


--
-- Name: jadwal_ibadah id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY jadwal_ibadah ALTER COLUMN id SET DEFAULT nextval('jadwal_ibadah_id_seq'::regclass);


--
-- Name: tipe_gereja id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipe_gereja ALTER COLUMN id SET DEFAULT nextval('tipe_gereja_id_seq'::regclass);


--
-- Name: user id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user" ALTER COLUMN id SET DEFAULT nextval('user_id_seq'::regclass);


--
-- Data for Name: foto_gereja; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY foto_gereja (id, gereja_id, nama_foto) FROM stdin;
\.


--
-- Name: foto_gereja_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('foto_gereja_id_seq', 1, false);


--
-- Data for Name: gereja; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY gereja (id, nama, tipe_id, latitude, longitude) FROM stdin;
1	Gideon	2	-6.354805	106.848057
\.


--
-- Name: gereja_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('gereja_id_seq', 1, true);


--
-- Data for Name: history_gereja_view; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY history_gereja_view (id, user_id, gereja_id, waktu_dilihat) FROM stdin;
\.


--
-- Name: history_gereja_view_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('history_gereja_view_id_seq', 1, false);


--
-- Data for Name: jadwal_ibadah; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY jadwal_ibadah (id, gereja_id, jam_ibadah) FROM stdin;
\.


--
-- Name: jadwal_ibadah_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('jadwal_ibadah_id_seq', 1, false);


--
-- Data for Name: tipe_gereja; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipe_gereja (id, nama, nama_lengkap) FROM stdin;
6	GPDI	\N
7	GKPS	\N
8	GKY	\N
1	HKBP	Huria Kristen Batak Protestan
2	GPIB	Gereja Protestan Indonesia bagian Barat
3	GBI	Gereja Bethel Indonesia
4	HKI	Huria Kristen Indonesia
5	GKI	Gereja Kristen Indonesia
\.


--
-- Name: tipe_gereja_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipe_gereja_id_seq', 8, true);


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "user" (id, google_id, nama, gambar) FROM stdin;
1	115587953953776316068	Agung Pasaribu	https://lh3.googleusercontent.com/-jb9atvgPZJ4/AAAAAAAAAAI/AAAAAAAAA0M/vzLMyw6PtRo/photo.jpg
2	104767977559388219781	david sihombing	https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg
\.


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_id_seq', 2, true);


--
-- Name: foto_gereja foto_gereja_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY foto_gereja
    ADD CONSTRAINT foto_gereja_pk PRIMARY KEY (id);


--
-- Name: gereja gereja_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY gereja
    ADD CONSTRAINT gereja_pk PRIMARY KEY (id);


--
-- Name: history_gereja_view history_view_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY history_gereja_view
    ADD CONSTRAINT history_view_pk PRIMARY KEY (id);


--
-- Name: jadwal_ibadah jadwal_ibadah_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY jadwal_ibadah
    ADD CONSTRAINT jadwal_ibadah_pk PRIMARY KEY (id);


--
-- Name: tipe_gereja tipe_gereja_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipe_gereja
    ADD CONSTRAINT tipe_gereja_pk PRIMARY KEY (id);


--
-- Name: user user_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_pk PRIMARY KEY (id);


--
-- Name: foto_gereja foto_gereja_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY foto_gereja
    ADD CONSTRAINT foto_gereja_fk FOREIGN KEY (gereja_id) REFERENCES gereja(id);


--
-- Name: history_gereja_view history_gereja_user_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY history_gereja_view
    ADD CONSTRAINT history_gereja_user_fk FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: history_gereja_view history_view_gereja_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY history_gereja_view
    ADD CONSTRAINT history_view_gereja_fk FOREIGN KEY (gereja_id) REFERENCES gereja(id);


--
-- Name: jadwal_ibadah jadwal_ibadah_gereja_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY jadwal_ibadah
    ADD CONSTRAINT jadwal_ibadah_gereja_fk FOREIGN KEY (gereja_id) REFERENCES gereja(id);


--
-- Name: gereja tipe_gereja_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY gereja
    ADD CONSTRAINT tipe_gereja_fk FOREIGN KEY (tipe_id) REFERENCES tipe_gereja(id);


--
-- PostgreSQL database dump complete
--

