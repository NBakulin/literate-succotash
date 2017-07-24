select distinct game 
from users inner join payments on users.id = payments.user_id 
where level > 10 
group by users.id 
having sum(amount) > 100;