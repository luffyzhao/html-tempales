不及格:
通过这个sql可以找到不及格学生的学号及平均值:
select S.SNAME, count(SCGRADE), avg(SC.SCGRADE) from SC inner join S on SC.SNO=SC.SNO where SC.SCGRADE < 60 group by S.SNAME having count(SC.SCGRADE) >= 2;


