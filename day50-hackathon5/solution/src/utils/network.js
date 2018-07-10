export const getJson = async (endpoint, searchParams) => {
  const query = searchParams ? new URLSearchParams(searchParams) : null;
  const url = new URL(query ? `?${query}` : '', endpoint);

  const response = await fetch(url);

  return response.json();
};
