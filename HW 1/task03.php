<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 14.07.2017
 * Time: 14:18
 */

//������� #3
//
//�������� ��������� � ��������� �� ��������.
//���������, ���������� �� ���������, ������� �� ������ ������������
//�������� �������� ��������� ���������
//����������� �������� �������� ��������� ���������.
//

define('BOOBS', 2);
$const_is_defined = defined('BOOBS') ? 'Const is defined':'Something gone wrong';
echo "$const_is_defined; <br /> Value: " . BOOBS . '<br />';

//$try_to_change = (BOOBS = 3) ? 'I cant change value, its still 2':'New Value' . BOOBS;
//echo $try_to_change;
//Parse Error!
