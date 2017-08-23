for i in {1..15}; do
  curl -H "Authorization: token {{ secret-key }}" https://api.hypertrack.com/api/v1/groups/?page=${i} > group-page-${i}.json
done