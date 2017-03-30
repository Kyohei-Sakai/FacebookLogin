-- データベースの設定

create database dotinstall_fb_connect_php;

grant all on dotinstall_fb_connect_php.* to dbuser@localhost identified by 'htmr821';

use dotinstall_fb_connect_php

drop table if exists users;
create table users (
  id int not null auto_increment primary key,
  fb_user_id bigint unique,
  fb_name varchar(255),
  fb_link varchar(255),
  fb_access_token varchar(511),
  created datetime,
  modified datetime
);


-- select
select * from users;

-- delete
delete from users;
