# -*- coding: utf-8 -*-
"""
Created on Sun Oct  3 22:27:17 2021

@author: JORGE

sql="INSERT INTO `persona`(`ci`, `nombre`, `apellido`, `fechanac`, `departamento`) VALUES (%s,%s,%s,%s,%s)"
datos=(666,"naranja","banana", 19230506,"OR")
cursor1.execute(sql, datos)
datos=(777,"coco","mandarina", 19800707,"PD")
cursor1.execute(sql, datos)



sql = "INSERT INTO `usuario`(`ci`, `usuario`, `passwordu`) VALUES (%s,%s,%s)"
datos=(666,"Estudiante",1923)
cursor1.execute(sql, datos)
datos=(777,"Docente",1707)
cursor1.execute(sql, datos)

"""

import mysql.connector

conexion1=mysql.connector.connect(host="localhost", 
                                  user="user324", 
                                  passwd="123456789", 
                                  database="mibasealvaro")
cursor1=conexion1.cursor()
sql = "INSERT INTO `usuario`(`ci`, `usuario`, `passwordu`) VALUES (%s,%s,%s)"
datos=(666,"Estudiante",1923)
cursor1.execute(sql, datos)
datos=(777,"Docente",1707)
cursor1.execute(sql, datos)
conexion1.commit()
conexion1.close() 