> phpMyAdmin

- 콘솔창

ctrl + Enter = 쿼리 실행
DELETE FROM `customer` : 모든 데이터 삭제

- 가져오기로 바로 파일 불러와도 됨

> 검색(SQL 명령)

- 1000 이상 5000이하 마일리지 소지 고객 목록

```php
select * from customer where mileage >= 1000 && mileage <= 5000
```

- 김씨 성을 가진 고객 목록 보기

```php
select * from customer where name like '김%'
```

- 성남시 사는 여성 고객 목록

```php
select * from customer where address like '%성남시%' and gender='W'
```

% 위치에 아무거나 들어가도 OK
