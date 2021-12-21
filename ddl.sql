drop table if exists likes;
drop table if exists screenshots;
drop table if exists users;

create table if not exists users
(
    id            bigint unique primary key,
    login         varchar(15) unique not null,
    password_hash varchar(100)       not null,
    email         varchar(30) unique not null,
    phone         varchar(15) unique null default null,
    is_moderator  bool                    default false
);

create table if not exists screenshots
(
    id          bigint unique primary key,
    upload_date date         not null,
    uuid        varchar(36)  not null,
    sblob       mediumblob   not null,
    ext         varchar(10)  not null,
    description varchar(100) not null,
    user_id     bigint       references users (id) on update cascade on delete set null
);

create table if not exists likes
(
    user_id       bigint references users (id) on update cascade on delete cascade,
    screenshot_id bigint references screenshots (id) on update cascade on delete cascade,
    primary key (user_id, screenshot_id)
);