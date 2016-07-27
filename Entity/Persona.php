<?php
/**
 * @Entity @Table(name="persona") 
 **/
class Persona {
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $nombre;
    /** @Column(type="string") **/
    protected $apellido1;
    /** @Column(type="string") **/
    protected $apellido2;
}